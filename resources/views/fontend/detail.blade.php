@extends('fontend.layouts.app')

@push('css')
@endpush

@section('content')
    <div class="show-detail">
        <div class="title-bridge p-5">
            <h1>Viet Nam</h1>
        </div>
        <div class="detail-bridges">
            <div class="detail-bridges-block">
                <div>
                    <img class="img-fluid" src="{{ asset('fontend/img/cauthuanphuoc.jpg') }}" alt="">
                </div>
                <h1 class="text-center py-3">Cầu Thuận Phước</h1>
                <div class="col-8 offset-2">
                    <div class="text-center pb-5">
                        Cầu Thuận Phước là cây cầu treo dây võng hiện đại và dài nhất Việt Nam, được thiết kế với 2 trụ tháp cao 92 m, cách nhau 405 m, tĩnh không thông thuyền 27 m, kết cấu dầm hộp thép hợp kim suốt toàn bộ nhịp treo dài 650 m, được chế tạo bằng công nghệ dầm tăng cứng theo tiêu chuẩn quốc tế.
                    </div>
                    <div class="row no-gutters">
                        <div class="col-6">
                            <h2>Thông số</h2>
                            <div class="description-bridge">
                                <p>Cầu dài 1856 m và là cầu treo dây võng dài nhất Việt Nam</p>
                                <ul>
                                    <li>Chiều rộng cầu: 18 m</li>
                                    <li>Số làn xe: 4(ô tô và xe máy), 2 lối đi bộ và 2 lối đi xe đạp (xe thô sơ)</li>
                                    <li>Trọng tải: 13 tấn</li>
                                    <li>Độ tĩnh không thông thuyền: 27 m</li>
                                    <li>3 nhịp dây võng dài: 655m</li>
                                    <li>Có khẩu độ nhịp dây võng lớn nhất Việt Nam: 405m</li>
                                    <li>Số lượng trụ tháp: 2</li>
                                    <li>Độ cao tháp trụ: 80m tính từ bệ cọc</li>
                                    <li>Khoảng cách giữa 2 trụ tháp: 405 m</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.520454601649!2d108.22105855112537!3d16.09486279069983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218119daf2849%3A0x5eb1ddfca189043e!2zVGh1YW4gUGh1b2MgQnJpZGdlLCBD4bqndSBUaHXhuq1uIFBoxrDhu5tjLCBO4bqhaSBIacOqbiDEkMO0bmcsIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1602176212779!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="detail-bridges-block">
                <div>
                    <img class="img-fluid" src="{{ asset('fontend/img/cauthuanphuoc.jpg') }}" alt="">
                </div>
                <h1 class="text-center py-3">Cầu Thuận Phước</h1>
                <div class="col-8 offset-2">
                    <div class="text-center pb-5">
                        Cầu Thuận Phước là cây cầu treo dây võng hiện đại và dài nhất Việt Nam, được thiết kế với 2 trụ tháp cao 92 m, cách nhau 405 m, tĩnh không thông thuyền 27 m, kết cấu dầm hộp thép hợp kim suốt toàn bộ nhịp treo dài 650 m, được chế tạo bằng công nghệ dầm tăng cứng theo tiêu chuẩn quốc tế.
                    </div>
                    <div class="row no-gutters">
                        <div class="col-6">
                            <h2>Thông số</h2>
                            <div class="description-bridge">
                                <p>Cầu dài 1856 m và là cầu treo dây võng dài nhất Việt Nam</p>
                                <ul>
                                    <li>Chiều rộng cầu: 18 m</li>
                                    <li>Số làn xe: 4(ô tô và xe máy), 2 lối đi bộ và 2 lối đi xe đạp (xe thô sơ)</li>
                                    <li>Trọng tải: 13 tấn</li>
                                    <li>Độ tĩnh không thông thuyền: 27 m</li>
                                    <li>3 nhịp dây võng dài: 655m</li>
                                    <li>Có khẩu độ nhịp dây võng lớn nhất Việt Nam: 405m</li>
                                    <li>Số lượng trụ tháp: 2</li>
                                    <li>Độ cao tháp trụ: 80m tính từ bệ cọc</li>
                                    <li>Khoảng cách giữa 2 trụ tháp: 405 m</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.520454601649!2d108.22105855112537!3d16.09486279069983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218119daf2849%3A0x5eb1ddfca189043e!2zVGh1YW4gUGh1b2MgQnJpZGdlLCBD4bqndSBUaHXhuq1uIFBoxrDhu5tjLCBO4bqhaSBIacOqbiDEkMO0bmcsIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1602176212779!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="detail-bridges-block">
                <div>
                    <img class="img-fluid" src="{{ asset('fontend/img/cauthuanphuoc.jpg') }}" alt="">
                </div>
                <h1 class="text-center py-3">Cầu Thuận Phước</h1>
                <div class="col-8 offset-2">
                    <div class="text-center pb-5">
                        Cầu Thuận Phước là cây cầu treo dây võng hiện đại và dài nhất Việt Nam, được thiết kế với 2 trụ tháp cao 92 m, cách nhau 405 m, tĩnh không thông thuyền 27 m, kết cấu dầm hộp thép hợp kim suốt toàn bộ nhịp treo dài 650 m, được chế tạo bằng công nghệ dầm tăng cứng theo tiêu chuẩn quốc tế.
                    </div>
                    <div class="row no-gutters">
                        <div class="col-6">
                            <h2>Thông số</h2>
                            <div class="description-bridge">
                                <p>Cầu dài 1856 m và là cầu treo dây võng dài nhất Việt Nam</p>
                                <ul>
                                    <li>Chiều rộng cầu: 18 m</li>
                                    <li>Số làn xe: 4(ô tô và xe máy), 2 lối đi bộ và 2 lối đi xe đạp (xe thô sơ)</li>
                                    <li>Trọng tải: 13 tấn</li>
                                    <li>Độ tĩnh không thông thuyền: 27 m</li>
                                    <li>3 nhịp dây võng dài: 655m</li>
                                    <li>Có khẩu độ nhịp dây võng lớn nhất Việt Nam: 405m</li>
                                    <li>Số lượng trụ tháp: 2</li>
                                    <li>Độ cao tháp trụ: 80m tính từ bệ cọc</li>
                                    <li>Khoảng cách giữa 2 trụ tháp: 405 m</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.520454601649!2d108.22105855112537!3d16.09486279069983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218119daf2849%3A0x5eb1ddfca189043e!2zVGh1YW4gUGh1b2MgQnJpZGdlLCBD4bqndSBUaHXhuq1uIFBoxrDhu5tjLCBO4bqhaSBIacOqbiDEkMO0bmcsIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1602176212779!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="detail-bridges-block">
                <div>
                    <img class="img-fluid" src="{{ asset('fontend/img/cauthuanphuoc.jpg') }}" alt="">
                </div>
                <h1 class="text-center py-3">Cầu Thuận Phước</h1>
                <div class="col-8 offset-2">
                    <div class="text-center pb-5">
                        Cầu Thuận Phước là cây cầu treo dây võng hiện đại và dài nhất Việt Nam, được thiết kế với 2 trụ tháp cao 92 m, cách nhau 405 m, tĩnh không thông thuyền 27 m, kết cấu dầm hộp thép hợp kim suốt toàn bộ nhịp treo dài 650 m, được chế tạo bằng công nghệ dầm tăng cứng theo tiêu chuẩn quốc tế.
                    </div>
                    <div class="row no-gutters">
                        <div class="col-6">
                            <h2>Thông số</h2>
                            <div class="description-bridge">
                                <p>Cầu dài 1856 m và là cầu treo dây võng dài nhất Việt Nam</p>
                                <ul>
                                    <li>Chiều rộng cầu: 18 m</li>
                                    <li>Số làn xe: 4(ô tô và xe máy), 2 lối đi bộ và 2 lối đi xe đạp (xe thô sơ)</li>
                                    <li>Trọng tải: 13 tấn</li>
                                    <li>Độ tĩnh không thông thuyền: 27 m</li>
                                    <li>3 nhịp dây võng dài: 655m</li>
                                    <li>Có khẩu độ nhịp dây võng lớn nhất Việt Nam: 405m</li>
                                    <li>Số lượng trụ tháp: 2</li>
                                    <li>Độ cao tháp trụ: 80m tính từ bệ cọc</li>
                                    <li>Khoảng cách giữa 2 trụ tháp: 405 m</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.520454601649!2d108.22105855112537!3d16.09486279069983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218119daf2849%3A0x5eb1ddfca189043e!2zVGh1YW4gUGh1b2MgQnJpZGdlLCBD4bqndSBUaHXhuq1uIFBoxrDhu5tjLCBO4bqhaSBIacOqbiDEkMO0bmcsIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1602176212779!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="detail-bridges-block">
                <div>
                    <img class="img-fluid" src="{{ asset('fontend/img/cauthuanphuoc.jpg') }}" alt="">
                </div>
                <h1 class="text-center py-3">Cầu Thuận Phước</h1>
                <div class="col-8 offset-2">
                    <div class="text-center pb-5">
                        Cầu Thuận Phước là cây cầu treo dây võng hiện đại và dài nhất Việt Nam, được thiết kế với 2 trụ tháp cao 92 m, cách nhau 405 m, tĩnh không thông thuyền 27 m, kết cấu dầm hộp thép hợp kim suốt toàn bộ nhịp treo dài 650 m, được chế tạo bằng công nghệ dầm tăng cứng theo tiêu chuẩn quốc tế.
                    </div>
                    <div class="row no-gutters">
                        <div class="col-6">
                            <h2>Thông số</h2>
                            <div class="description-bridge">
                                <p>Cầu dài 1856 m và là cầu treo dây võng dài nhất Việt Nam</p>
                                <ul>
                                    <li>Chiều rộng cầu: 18 m</li>
                                    <li>Số làn xe: 4(ô tô và xe máy), 2 lối đi bộ và 2 lối đi xe đạp (xe thô sơ)</li>
                                    <li>Trọng tải: 13 tấn</li>
                                    <li>Độ tĩnh không thông thuyền: 27 m</li>
                                    <li>3 nhịp dây võng dài: 655m</li>
                                    <li>Có khẩu độ nhịp dây võng lớn nhất Việt Nam: 405m</li>
                                    <li>Số lượng trụ tháp: 2</li>
                                    <li>Độ cao tháp trụ: 80m tính từ bệ cọc</li>
                                    <li>Khoảng cách giữa 2 trụ tháp: 405 m</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.520454601649!2d108.22105855112537!3d16.09486279069983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218119daf2849%3A0x5eb1ddfca189043e!2zVGh1YW4gUGh1b2MgQnJpZGdlLCBD4bqndSBUaHXhuq1uIFBoxrDhu5tjLCBO4bqhaSBIacOqbiDEkMO0bmcsIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1602176212779!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="detail-bridges-block">
                <div>
                    <img class="img-fluid" src="{{ asset('fontend/img/cauthuanphuoc.jpg') }}" alt="">
                </div>
                <h1 class="text-center py-3">Cầu Thuận Phước</h1>
                <div class="col-8 offset-2">
                    <div class="text-center pb-5">
                        Cầu Thuận Phước là cây cầu treo dây võng hiện đại và dài nhất Việt Nam, được thiết kế với 2 trụ tháp cao 92 m, cách nhau 405 m, tĩnh không thông thuyền 27 m, kết cấu dầm hộp thép hợp kim suốt toàn bộ nhịp treo dài 650 m, được chế tạo bằng công nghệ dầm tăng cứng theo tiêu chuẩn quốc tế.
                    </div>
                    <div class="row no-gutters">
                        <div class="col-6">
                            <h2>Thông số</h2>
                            <div class="description-bridge">
                                <p>Cầu dài 1856 m và là cầu treo dây võng dài nhất Việt Nam</p>
                                <ul>
                                    <li>Chiều rộng cầu: 18 m</li>
                                    <li>Số làn xe: 4(ô tô và xe máy), 2 lối đi bộ và 2 lối đi xe đạp (xe thô sơ)</li>
                                    <li>Trọng tải: 13 tấn</li>
                                    <li>Độ tĩnh không thông thuyền: 27 m</li>
                                    <li>3 nhịp dây võng dài: 655m</li>
                                    <li>Có khẩu độ nhịp dây võng lớn nhất Việt Nam: 405m</li>
                                    <li>Số lượng trụ tháp: 2</li>
                                    <li>Độ cao tháp trụ: 80m tính từ bệ cọc</li>
                                    <li>Khoảng cách giữa 2 trụ tháp: 405 m</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.520454601649!2d108.22105855112537!3d16.09486279069983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218119daf2849%3A0x5eb1ddfca189043e!2zVGh1YW4gUGh1b2MgQnJpZGdlLCBD4bqndSBUaHXhuq1uIFBoxrDhu5tjLCBO4bqhaSBIacOqbiDEkMO0bmcsIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1602176212779!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
        </div>
    </div>
@endsection

@push('js')
@endpush
