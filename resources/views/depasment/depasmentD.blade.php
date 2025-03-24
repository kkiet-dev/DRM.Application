<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Review Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center fw-bold">PHÒNG BAN A</h2>
    <p class="text-center text-muted"></p>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Thông tin tiếp nhận
        </div>
        <div class="card-body">
            <p><strong>Tên:</strong> John Doe</p>
            <p><strong>Email:</strong> johndoe@example.com</p>
            <p><strong>Nội dung:</strong> I am interested in working with you.</p>
            <p><strong>Đính Kèm File:</strong> <a href="#">proposal.pdf</a></p>
        </div>
    </div>

    <form class="mt-4">
        <div class="mb-3">
            <label for="responseMessage" class="form-label">Phản hồi</label>
            <textarea class="form-control" id="responseMessage" rows="4" placeholder="Thông tin phản hồi..."></textarea>
        </div>

        <div class="mb-3">
            <label for="approvalStatus" class="form-label">Trạng thái phê duyệt</label>
            <select class="form-select" id="approvalStatus">
                <option value="approved">Duyệt</option>
                <option value="rejected">Từ chối</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Send Response</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
