@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.page.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.id') }}
                        </th>
                        <td>
                            {{ $page->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.title') }}
                        </th>
                        <td>
                            {{ $page->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.excerpt') }}
                        </th>
                        <td>
                            {{ $page->excerpt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.main_content') }}
                        </th>
                        <td>
                            {!! $page->main_content !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.featured_image') }}
                        </th>
                        <td>
                            @if($page->featured_image)
                                <a href="{{ $page->featured_image->getUrl() }}" target="_blank">
                                    <img src="{{ $page->featured_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.meta_title') }}
                        </th>
                        <td>
                            {{ $page->meta_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.meta_description') }}
                        </th>
                        <td>
                            {{ $page->meta_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.facebook_title') }}
                        </th>
                        <td>
                            {{ $page->facebook_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.facebook_desc') }}
                        </th>
                        <td>
                            {{ $page->facebook_desc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.twitter_description') }}
                        </th>
                        <td>
                            {{ $page->twitter_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.twitter_title') }}
                        </th>
                        <td>
                            {{ $page->twitter_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.published') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $page->published ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.page.fields.slug') }}
                        </th>
                        <td>
                            {{ $page->slug }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection