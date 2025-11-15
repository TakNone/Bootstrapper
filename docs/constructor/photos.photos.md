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
			id : 4093521195024856746,
		),
		$client->photo(
			has_stickers : true,
			id : 4413411294513954123,
			access_hash : -1526123182866483368,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 49,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'F9T2pQanE8x3k1HA',
				),
				$client->photoSize(
					type : 'Lof7ypFg3SWN1BX0',
					w : 54,
					h : 46,
					size : 96,
				),
				$client->photoCachedSize(
					type : '6uB01ZsUn9jgyrkq',
					w : 38,
					h : 16,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'MXzDJOfQt4aNoPKS',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'i6ncwuzSI7eUVbJ9',
					w : 68,
					h : 87,
					sizes : array(73),
				),
				$client->photoPathSize(
					type : 'mF0sbV9Nx6qGDcHM',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'ldSBc4mvJWgsFL6P',
					w : 26,
					h : 99,
					size : 90,
					video_start_ts : -2041053.638671875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 6763042223630039178,
					background_colors : array(42),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 1763594262530061598,
					background_colors : array(5),
				),
			),
			dc_id : 4,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3028321740610566078,
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
			id : 1150985200906794437,
			access_hash : -312515435858660831,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0sJKT8FjxrRHc3Sp',
					reason : 'ZOhInyM6oHizBXRU',
					text : 'CytwJiuISoVlYWL6',
				),
			),
			bot_inline_placeholder : 'i9WOBJhtxoMT1Avg',
			lang_code : 'eN17YyJQWvXsCt8g',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 72,
			color : $client->peerColor(
				color : 84,
				background_emoji_id : -4197104410723668995,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : 8206352125897312067,
			),
			bot_active_users : 58,
			bot_verification_icon : -6750746338508164229,
			send_paid_messages_stars : -4995832117911436651,
		),
	),
);
```