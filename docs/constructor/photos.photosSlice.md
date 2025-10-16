# photos.photosSlice

**Description** : *Incomplete list of photos with auxiliary data*

**Layer** : 216

```tl
photos.photosSlice#15051f54 count:int photos:Vector<Photo> users:Vector<User> = photos.Photos;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of photos |
| <mark>photos</mark> | [`Vector<Photo>`](type/Photo) | List of photos |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of mentioned users |

---

## Type

[photos.Photos](type/photos.Photos)

---

## Example

```php
$photosPhotos = $client->photos->photosSlice(
	count : 38,
	photos : array(
		$client->photoEmpty(
			id : 3788744404946200865,
		),
		$client->photo(
			has_stickers : true,
			id : -866787379499672390,
			access_hash : -8162738638851926021,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 88,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'UR2hAdQVqz1N0rWx',
				),
				$client->photoSize(
					type : '2GmYZbz10O4loLtq',
					w : 75,
					h : 24,
					size : 41,
				),
				$client->photoCachedSize(
					type : 'TZg6dp70WDKkjySe',
					w : 61,
					h : 55,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'qR6WmQo2VOywd9kb',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'OnNVehYd62wP8LBm',
					w : 6,
					h : 23,
					sizes : array(45),
				),
				$client->photoPathSize(
					type : 'Wlrcgah3HDmZqC2N',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'CgOwNiBt598e2mUc',
					w : 48,
					h : 3,
					size : 28,
					video_start_ts : -1081457.85546875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8865492203898662029,
					background_colors : array(99),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -7773334514226561395,
					background_colors : array(42),
				),
			),
			dc_id : 31,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2117980214565858366,
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
			id : 4598368220370668880,
			access_hash : -8606799984977055452,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KUgDqYRZ2vwkGso8',
					reason : 'ZYM4X3AqoDdVNJ5G',
					text : 'ejvuQ5UZVO0TfpkN',
				),
			),
			bot_inline_placeholder : 'DgNux7nBkZ8CifF6',
			lang_code : '78Uw0uSVTRzDjtJF',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 31,
			color : $client->peerColor(
				color : 20,
				background_emoji_id : -860997134454255187,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : 2196897530997493347,
			),
			bot_active_users : 62,
			bot_verification_icon : -7848133562178768353,
			send_paid_messages_stars : -4759024601831860279,
		),
	),
);
```