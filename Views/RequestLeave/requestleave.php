<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="../../Resources/Images/leave_req.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Request Leave</h4>
        </div>

        <form>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <label class="form-label" for="leave_type">Leave Type</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select leave type...</option>
                        <option value="annual">Annual</option>
                        <option value="casual">Casual</option>
                        <option value="maternity">Maternity</option>
                        <option value="no_pay">No-pay</option>
                    </select>
                </div>

                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="email">No. of Days</label>
                    <input type="text" id="no_of_days" class="form-control" placeholder="No. of Days" />
                </div>
            </div>

            <div class="row">
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="email">Leave Date</label>
                    <input type="date" id="leave_date" class="form-control" placeholder="" />
                </div>
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="email">Return Date</label>
                    <input type="date" id="return_date" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Reason</label>
                <textarea class="form-control" placeholder="Enter a reason for the leave" id="reason"></textarea>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn" type="button">Request</button>
            </div>
        </form>
    </div>
</div>