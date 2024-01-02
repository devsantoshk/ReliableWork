<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
</head>
<body>
    
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
<script>
    // Formatting function for row details - modify as you need
function format(d) {
    // `d` is the original data object for the row
    return (
        '<dl>' +
        '<dt>Full name:</dt>' +
        '<dd>' +
        'Tiger Nixon' +
        '</dd>' +
        '<dt>Extension number:</dt>' +
        '<dd>' +
        'System Architect' +
        '</dd>' +
        '<dt>Extra info:</dt>' +
        '<dd>And any further details here (images etc)...</dd>' +
        '</dl>'
    );
}
 
let table = new DataTable('#example', {
    ajax: 'objects.json',
    columns: [
        {
            className: 'dt-control',
            orderable: false,
            data: null,
            defaultContent: ''
        },
        { data: 'name' },
        { data: 'position' },
        { data: 'office' },
        { data: 'salary' }
    ],
    order: [[1, 'asc']]
});
 
// Add event listener for opening and closing details
table.on('click', 'td.dt-control', function (e) {
    let tr = e.target.closest('tr');
    let row = table.row(tr);
 
    // if (row.child.isShown()) {
    //     // This row is already open - close it
    //     row.child.hide();
    // }
    // else {
        // Open this row
        row.child(format(row.data())).show();
    // }
});
</script>
</body>
</html>