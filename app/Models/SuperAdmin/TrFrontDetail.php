<?php

namespace App\Models\SuperAdmin;

use App\Models\LanguageSetting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\SuperAdmin\TrFrontDetail
 *
 * @property int $id
 * @property int|null $language_setting_id
 * @property string $header_title
 * @property string $header_description
 * @property string $image
 * @property string|null $feature_title
 * @property string|null $feature_description
 * @property string|null $price_title
 * @property string|null $price_description
 * @property string|null $task_management_title
 * @property string|null $task_management_detail
 * @property string|null $manage_bills_title
 * @property string|null $manage_bills_detail
 * @property string|null $teamates_title
 * @property string|null $teamates_detail
 * @property string|null $favourite_apps_title
 * @property string|null $favourite_apps_detail
 * @property string|null $cta_title
 * @property string|null $cta_detail
 * @property string|null $client_title
 * @property string|null $client_detail
 * @property string|null $testimonial_title
 * @property string|null $testimonial_detail
 * @property string|null $faq_title
 * @property string|null $faq_detail
 * @property string|null $footer_copyright_text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $image_url
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereClientDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereClientTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereCtaDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereCtaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereFaqDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereFaqTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereFavouriteAppsDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereFavouriteAppsTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereFeatureDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereFeatureTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereFooterCopyrightText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereHeaderDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereHeaderTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereLanguageSettingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereManageBillsDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereManageBillsTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail wherePriceDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail wherePriceTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereTaskManagementDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereTaskManagementTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereTeamatesDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereTeamatesTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereTestimonialDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereTestimonialTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrFrontDetail whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read LanguageSetting|null $language
 */
class TrFrontDetail extends Model
{
    protected $guarded = ['id'];

    public function getImageUrlAttribute()
    {
        return ($this->image) ? asset_url('front/' . $this->image) : asset('saas/img/home/home-crm.png');
    }

    public function language()
    {
        return $this->belongsTo(LanguageSetting::class, 'language_setting_id');
    }

}
