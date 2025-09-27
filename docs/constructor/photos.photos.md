# photos.photos

**Description** : *Full list of photos with auxiliary data*

**Layer** : 216

```tl
photos.photos#8dca6aa5 photos:Vector<Photo> users:Vector<User> = photos.Photos;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>photos</mark> | [`Vector<Photo>`](type/Photo) | List of photos |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of mentioned users |

---

## Type

[photos.Photos](type/photos.Photos)

---

## Example

```php
$photosPhotos = $client->photos->photos(
	photos : array(
		$client->photoEmpty(
			id : -5173645233335076168,
		),
		$client->photo(
			has_stickers : true,
			id : 5824743403071656596,
			access_hash : 5523753465901677886,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 11,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'PHC14OhVkFizQMS9',
				),
				$client->photoSize(
					type : 'rdVNm6ebQypSEfzo',
					w : 36,
					h : 16,
					size : 40,
				),
				$client->photoCachedSize(
					type : 'UXY5BF67v2zbNkgi',
					w : 95,
					h : 86,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'olBijbROMC5xke2V',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'P8A2CmZ9BuJGft5F',
					w : 73,
					h : 75,
					sizes : array(10),
				),
				$client->photoPathSize(
					type : '31ThkHyduNxOmbEG',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'TQv9IOSykCNAr8jW',
					w : 16,
					h : 29,
					size : 9,
					video_start_ts : 618044.2548828125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4728648855798831351,
					background_colors : array(94),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 8239597803104681243,
					background_colors : array(65),
				),
			),
			dc_id : 40,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2710679381457053101,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : 214908726874988364,
			access_hash : 6849915086157964830,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 10,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 's3aHRTDbingcfE5L',
					reason : 'gPCfN9QYsbHljMBV',
					text : '2zan8vEu130Uq7VX',
				),
			),
			bot_inline_placeholder : 'gKeocBSnIsFMtEpO',
			lang_code : 'SMExonekyzfa3NhH',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 93,
			color : $client->peerColor(
				color : 96,
				background_emoji_id : 2584232868185263955,
			),
			profile_color : $client->peerColor(
				color : 44,
				background_emoji_id : -8983150925242971051,
			),
			bot_active_users : 40,
			bot_verification_icon : 2915086033478532672,
			send_paid_messages_stars : 1712085616672599578,
		),
	),
);
```