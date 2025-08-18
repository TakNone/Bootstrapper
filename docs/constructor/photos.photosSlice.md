# photos.photosSlice

**Description** : *Incomplete list of photos with auxiliary data*

**Layer** : 211

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
	count : 7,
	photos : array(
		$client->photoEmpty(
			id : -1228325072546175544,
		),
		$client->photo(
			has_stickers : true,
			id : 6865444163147918343,
			access_hash : 6654173410913746466,
			file_reference : 't?.??LiveProtoJ??-P',
			date : 68,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'us72NyUI89PVXf36',
				),
				$client->photoSize(
					type : 'tNmr0Dq8Y42Js3RK',
					w : 21,
					h : 65,
					size : 10,
				),
				$client->photoCachedSize(
					type : 'xPUIfE1R0GutLokT',
					w : 14,
					h : 22,
					bytes : '??ÈKLiveProtov?dx',
				),
				$client->photoStrippedSize(
					type : 'erPqd65zm24xXLlG',
					bytes : '??|LiveProto??=?',
				),
				$client->photoSizeProgressive(
					type : 'JuosnUeHY3Sa8hI7',
					w : 67,
					h : 62,
					sizes : array(66),
				),
				$client->photoPathSize(
					type : 'R6FlYtMSCiysZ89e',
					bytes : '??*LiveProto??R?',
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'u81gx659ZS4rewmb',
					w : 43,
					h : 97,
					size : 44,
					video_start_ts : -1850618.375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 462208245190286684,
					background_colors : array(84),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 3388806041494051079,
					background_colors : array(30),
				),
			),
			dc_id : 23,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6759796466894704216,
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
			id : 8824414055597338078,
			access_hash : -870174438393232028,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fMJ0k3XyVi2vjlYL',
					reason : 'NpkmQLs3XMHJBnui',
					text : 'VLvEzytYFTofDH6P',
				),
			),
			bot_inline_placeholder : 'SnWBlgAxdaiXZ6VH',
			lang_code : 'kQOLFBVrE8fyMdIZ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 23,
			color : $client->peerColor(
				color : 88,
				background_emoji_id : 225232847775266095,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : -4810946489879664320,
			),
			bot_active_users : 13,
			bot_verification_icon : 668584689538086775,
			send_paid_messages_stars : -6025784106876044397,
		),
	),
);
```