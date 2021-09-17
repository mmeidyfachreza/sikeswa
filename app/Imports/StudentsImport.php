<?php

namespace App\Imports;

use App\Student;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\Importable;

class StudentsImport implements ToModel, WithHeadingRow, WithValidation
{

    use Importable;

    /**
     * @param array $row
     *
     * @return Student|null
     */
    public function model(array $row)
    {
        // dd(Date::excelToDateTimeObject($row["tanggal_lahir"])->format("Y-m-d"));
            return new Student([
                'nis' => intval($row["nis"]),
                'name' => $row["nama"],
                'birth_place' => $row["tempat_lahir"],
                'birth_date' => Date::excelToDateTimeObject(intval($row["tanggal_lahir"]))->format("Y-d-m"),
                'address' => $row["alamat"],
                'gender' => $row["jk"],
                'school_from' => $row["asal_sekolah"],
                'class_year' => $row["tahun_masuk"],
                'classroom' => $row["kelas"],
                'father_name' => $row["nama_ayah"],
                'mother_name' => $row["nama_ibu"],
                'guardian' => $row["nama_wali"],
                'phone_number' => $row["nomor_handphone"],
                'blood_type' => $row["gol_darah"],
                'no_bpjs' => intval($row["no_bpjs"] ),
                'faskes_bpjs' => $row["faskes_bpjs"],
                // 'school_id' => ($this->schoolId) ? $this->schoolId : $row["id_sekolah"],
            ]);
    }


    public function rules(): array
    {
        //$schoolId = School::select("id")->get()->pluck("id")->toArray();
        $gender = array('Laki-laki','Perempuan');
        return [
            'nis'=> 'required|unique:students,nis',
            'nama' => 'required|string',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|integer',
            'jk' => Rule::in($gender),
            // 'id_sekolah'=> Rule::in($schoolId),
        ];
    }

    public function customValidationMessages()
    {
        return [
            'nama.required' => 'Nama wajib diisi',
            'nis.required' => 'NIS wajib diisi',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi',
            'agama.required' => 'Agama wajib diisi',
            'jk.required' => 'Jenis kelamin wajib diisi',
            // 'nama_orang_tua.required' => 'Nama Orang tua wajib diisi',
            // 'id_sekolah.in' => 'id sekolah tidak ditemukan, wajib isi id sekolah dan id berdasarkan sheet id seklah',


            'nis.unique' => 'NIS sudah terdaftar, silahkan gunakan NISN lain',
            // 'tanggal_lahir.integer' => 'Format tanggal lahir salah dan pastikan tidak ada tanda petik seperti \'02/12/2021',

            // 'date_format' => ':attribute tidak boleh menggunakan angka',
        ];
    }
}
