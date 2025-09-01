# photos.photosSlice

**Description** : *Incomplete list of photos with auxiliary data*

**Layer** : 214

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
	count : 23,
	photos : array(
		$client->photoEmpty(
			id : 4025877729210205878,
		),
		$client->photo(
			has_stickers : true,
			id : -5635894690472842922,
			access_hash : 5004321125011658260,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 55,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'Lvaj7MIwFbt9uUdD',
				),
				$client->photoSize(
					type : 'T267K9ym8lxdriPJ',
					w : 56,
					h : 63,
					size : 76,
				),
				$client->photoCachedSize(
					type : 'F3kUMKXsw8ifyYoO',
					w : 0,
					h : 65,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'NkbVCXhags8tWZcr',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'SxIGHEldKcY1etTu',
					w : 2,
					h : 85,
					sizes : array(51),
				),
				$client->photoPathSize(
					type : 'SvJCaPY138sTKUbO',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'I5XYh8tH2nj0UJcd',
					w : 7,
					h : 33,
					size : 42,
					video_start_ts : -599246.95703125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3038821418386457864,
					background_colors : array(5),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -3669309243956783186,
					background_colors : array(27),
				),
			),
			dc_id : 10,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5199091399122310221,
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
			id : 2630243412339326030,
			access_hash : -6026586011342675804,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Ys13EDhMHoXSC7Ul',
					reason : 'iA73BevLVGUbcgKE',
					text : 'serBG5VDXzuEWT9l',
				),
			),
			bot_inline_placeholder : 'JxMuAtchHNlUDjTZ',
			lang_code : 'xMFK5ejWHOwCQTJi',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 41,
			color : $client->peerColor(
				color : 96,
				background_emoji_id : -7674528456010409016,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : 1471607121556920509,
			),
			bot_active_users : 57,
			bot_verification_icon : 8257393045232455853,
			send_paid_messages_stars : 7482366995628044057,
		),
	),
);
```