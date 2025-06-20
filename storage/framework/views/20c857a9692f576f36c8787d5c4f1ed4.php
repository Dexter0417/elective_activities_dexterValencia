<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-radius: 15px; }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h3 class="text-center mb-4">Controller | Order Details</h3>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Transaction No</label>
                        <input type="text" class="form-control" value="<?php echo e($transNo); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Order No</label>
                        <input type="text" class="form-control" value="<?php echo e($orderNo); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Item ID</label>
                        <input type="text" class="form-control" value="<?php echo e($itemId); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Item Name</label>
                        <input type="text" class="form-control" value="<?php echo e($name); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" value="<?php echo e($price); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="text" class="form-control" value="<?php echo e($qty); ?>" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php /**PATH C:\Users\CEEDEE\Downloads\elective-charlesdave-main\elective-jessielou-bugarin\resources\views/activity4/orderDetails.blade.php ENDPATH**/ ?>