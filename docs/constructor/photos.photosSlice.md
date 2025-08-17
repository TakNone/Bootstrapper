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
	count : 12,
	photos : array(
		$client->photoEmpty(
			id : -4123410309236600119,
		),
		$client->photo(
			has_stickers : true,
			id : -3394738705936827598,
			access_hash : -5183916804990484445,
			file_reference : '??zLiveProto$u??L',
			date : 37,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'AEy07QWhbKLmRe5a',
				),
				$client->photoSize(
					type : '6AMEJmB7icS2H4YU',
					w : 23,
					h : 42,
					size : 5,
				),
				$client->photoCachedSize(
					type : '7AvQbMIcOjZ4sGYN',
					w : 16,
					h : 86,
					bytes : '?xhLiveProto????v',
				),
				$client->photoStrippedSize(
					type : 'bHuGRNTnP6Mg5EXf',
					bytes : '?SXmLiveProto??1',
				),
				$client->photoSizeProgressive(
					type : 'X82HM3vQ5ElD07IY',
					w : 99,
					h : 17,
					sizes : array(71),
				),
				$client->photoPathSize(
					type : 'xHbzstqeECwJgiAG',
					bytes : 'ѝ?
jLiveProto?:??',
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'yIlgK8bwoLxueCQS',
					w : 86,
					h : 80,
					size : 69,
					video_start_ts : 1764189.4013671875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1533640609399491445,
					background_colors : array(47),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 9205998843388393391,
					background_colors : array(85),
				),
			),
			dc_id : 25,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7685231998873528534,
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
			id : -398916287595997710,
			access_hash : -2884546448432897313,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 13,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6orgJAFp7m2bMwV8',
					reason : 'EV5P6fTJqFW0oMux',
					text : 'Oka3mg5QP8VSDW0r',
				),
			),
			bot_inline_placeholder : 'sVjctqlpUfYywhAZ',
			lang_code : '9bJWjgDRNdxKGSXU',
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
				color : 80,
				background_emoji_id : -3619614745676874239,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : 821160285223479221,
			),
			bot_active_users : 48,
			bot_verification_icon : 321944724745672864,
			send_paid_messages_stars : 6636775265104894268,
		),
	),
);
```