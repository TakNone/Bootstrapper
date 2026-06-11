# photos.photosSlice

**Description** : *Incomplete list of photos with auxiliary data*

**Layer** : 227

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
	count : 52,
	photos : array(
		$client->photoEmpty(
			id : -3824216764765636632,
		),
		$client->photo(
			has_stickers : true,
			id : -2791161407891133992,
			access_hash : 3229569201652970658,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 0,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'cu8ISfog0d6VwhGm',
				),
				$client->photoSize(
					type : 'NeHWJmfU1XT37b8o',
					w : 70,
					h : 17,
					size : 47,
				),
				$client->photoCachedSize(
					type : 'KbTjFe9R2NPnEaLh',
					w : 27,
					h : 81,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'KEYLDF3MGZQbfios',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'L76lcwA92DEWaohB',
					w : 87,
					h : 36,
					sizes : array(4),
				),
				$client->photoPathSize(
					type : 'T2Drc1ogZjvx7UwE',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : '9DmetqWSzw4b3T6f',
					w : 70,
					h : 35,
					size : 13,
					video_start_ts : 1257160.1591796875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7807992391120885330,
					background_colors : array(9),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6689170561450018800,
					background_colors : array(29),
				),
			),
			dc_id : 73,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1184580912096702638,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 2597971447888171911,
			access_hash : -8340206426384418173,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'OTKIfJ5nj0Q6obzs',
					reason : 'BkeJKv8uYUzm07HW',
					text : 'xZ8ukWJs42MPSg3T',
				),
			),
			bot_inline_placeholder : 'rswXEQO2q1enCkKT',
			lang_code : 'UXgsvKAmM7TCHy38',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 99,
			),
			color : $client->peerColor(
				color : 81,
				background_emoji_id : 1758740846452184425,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : 7419367414667586952,
			),
			bot_active_users : 72,
			bot_verification_icon : -3717284295609684976,
			send_paid_messages_stars : -8961845565258754978,
		),
	),
);
```