<html>

<head>
    <title>TOKO SEPATU</title>

    <style>
        .error1 {
            color: red;
        }
        body{ 
            background: aqua;
            font-family: 'Comic Sans MS'; 
        } 
    </style>
</head>

<body>
    <center>
        <form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
            <table  width="1250px">
                <tr>
                    <th>
                        <h2>TOKO SEPATU GLOIS</h2>
                    </th>
                </tr>

                <tr>
                    <th colspan="5"><input type="text" name="nama" id="nama" placeholder="Nama" ></th>
                </tr>
                <tr>
                    <th class="error1"><b> <?= form_error('nama'); ?></b></th>
                </tr>
                <tr>
                    <th> <input type="text" name='no' id='no' placeholder="No Handphone"></th>
                </tr>
                <tr>
                    <th class="error1"><b> <?= form_error('no'); ?></b></th>
                </tr>
                <tr>
                    <th>
                        <select name="merk" id="merk">
                            <option value="">--PILIH MERK SEPATU--</option>
                            <option value="Nike">NIKE</option>
                            <option value="Adidas">ADIDAS</option>
                            <option value="Kickers">KICKERS</option>
                            <option value="Eiger">EIGER</option>
                            <option value="Bucherri">BUCHERRI</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th class="error1"><b> <?= form_error('merk'); ?></b></th>
                </tr>
                <tr>
                    <th><select name="size" id="size">
                            <option value="">PILIH UKURAN SEPATU</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                    <</th>
                 </tr>
                 <tr>
                 <th class="error1"><b> <?= form_error('size'); ?></b></th>               
               
                <tr>
                    <td align="center" colspan="3">
                        <input type="submit" name="KONFIRMASI">
                        <input type="reset" name="BATAL">
                    </td>
                </tr>
            </table>
    </center>
</body>

</html>