<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['id' => 1605092601799, 'first_name' => 'Melvin', 'last_name' => 'Levine', 'email' => 'libero@ultricessitamet.co.uk'],
            ['id' => 1627060401499, 'first_name' => 'Elaine', 'last_name' => 'Donaldson', 'email' => 'Morbi.vehicula@imperdiet.ca'],
            ['id' => 1699112687399, 'first_name' => 'Roth', 'last_name' => 'Hinton', 'email' => 'lorem@Nullamscelerisque.net'],
            ['id' => 1651061329999, 'first_name' => 'Evelyn', 'last_name' => 'Atkinson', 'email' => 'tempus.eu@dolorelitpellentesque.com'],
            ['id' => 1669031424299, 'first_name' => 'Jackson', 'last_name' => 'Gould', 'email' => 'lorem@orci.com'],
            ['id' => 1610122466699, 'first_name' => 'Amena', 'last_name' => 'Winters', 'email' => 'eu.lacus@Uttincidunt.org'],
            ['id' => 1660020239499, 'first_name' => 'Giacomo', 'last_name' => 'James', 'email' => 'Duis.mi.enim@mi.com'],
            ['id' => 1664110352499, 'first_name' => 'Nathan', 'last_name' => 'Moran', 'email' => 'eget.lacus@erosNam.net'],
            ['id' => 1683092555899, 'first_name' => 'Vivian', 'last_name' => 'Workman', 'email' => 'fringilla@sagittis.net'],
            ['id' => 1607102510699, 'first_name' => 'Amal', 'last_name' => 'Cervantes', 'email' => 'aliquet@in.co.uk'],
            ['id' => 1656061966999, 'first_name' => 'Octavius', 'last_name' => 'Wade', 'email' => 'pede@mus.ca'],
            ['id' => 1667081298699, 'first_name' => 'Kenneth', 'last_name' => 'Fletcher', 'email' => 'in.consequat@dignissimtemporarcu.org'],
            ['id' => 1697062419499, 'first_name' => 'Malik', 'last_name' => 'Silva', 'email' => 'Suspendisse@commodo.com'],
            ['id' => 1656081805699, 'first_name' => 'Xanthus', 'last_name' => 'Mcgowan', 'email' => 'ridiculus.mus.Proin@Maurisvestibulum.org'],
            ['id' => 1638092980799, 'first_name' => 'Kay', 'last_name' => 'Marquez', 'email' => 'In@blanditviverraDonec.co.uk'],
            ['id' => 1691091750799, 'first_name' => 'Oleg', 'last_name' => 'Koch', 'email' => 'natoque.penatibus.et@Quisqueporttitor.com'],
            ['id' => 1611010296699, 'first_name' => 'Cathleen', 'last_name' => 'Greene', 'email' => 'semper@facilisisfacilisismagna.ca'],
            ['id' => 1605031215599, 'first_name' => 'Naomi', 'last_name' => 'Ferguson', 'email' => 'euismod.mauris@vulputateeu.net'],
            ['id' => 1651092040799, 'first_name' => 'Chadwick', 'last_name' => 'Allen', 'email' => 'enim@semper.co.uk'],
            ['id' => 1611112931699, 'first_name' => 'Jennifer', 'last_name' => 'Stevenson', 'email' => 'sollicitudin.adipiscing@Aenean.com'],
            ['id' => 1688110873699, 'first_name' => 'Brent', 'last_name' => 'Mcneil', 'email' => 'ac.arcu@Nuncsollicitudincommodo.net'],
            ['id' => 1665101843499, 'first_name' => 'Otto', 'last_name' => 'Hart', 'email' => 'elementum@Maurisvestibulum.org'],
            ['id' => 1653062608899, 'first_name' => 'Victor', 'last_name' => 'Mcconnell', 'email' => 'sem.Nulla@Quisque.co.uk'],
            ['id' => 1695092204299, 'first_name' => 'Branden', 'last_name' => 'Morgan', 'email' => 'Nulla.facilisis.Suspendisse@vitae.ca'],
            ['id' => 1641010876399, 'first_name' => 'Caryn', 'last_name' => 'Reid', 'email' => 'Aliquam.ornare.libero@adlitoratorquent.com'],
            ['id' => 1609062069499, 'first_name' => 'Wayne', 'last_name' => 'Pennington', 'email' => 'bibendum@metus.com'],
            ['id' => 1687072131299, 'first_name' => 'Xanthus', 'last_name' => 'Massey', 'email' => 'semper@odio.net'],
            ['id' => 1611102284199, 'first_name' => 'Ahmed', 'last_name' => 'Galloway', 'email' => 'eget.ipsum.Donec@laoreetlectusquis.co.uk'],
            ['id' => 1691060523599, 'first_name' => 'Willa', 'last_name' => 'Wagner', 'email' => 'at@interdumNuncsollicitudin.edu'],
            ['id' => 1643020941699, 'first_name' => 'Joy', 'last_name' => 'Carey', 'email' => 'scelerisque.lorem@dolordolortempus.ca'],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
