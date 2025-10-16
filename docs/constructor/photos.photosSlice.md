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
	count : 56,
	photos : array(
		$client->photoEmpty(
			id : -3783253974646156343,
		),
		$client->photo(
			has_stickers : true,
			id : -2443161007802949935,
			access_hash : -5038277473733411520,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 78,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'eCF8BI2SU4vVLuYr',
				),
				$client->photoSize(
					type : 'RtCPb8odupFhINBg',
					w : 40,
					h : 18,
					size : 49,
				),
				$client->photoCachedSize(
					type : '8rl4pYqFvNAELRHh',
					w : 87,
					h : 93,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '4hMCQ1KrH7VZJF3E',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'xrEJvUW0Z7kHgcfQ',
					w : 14,
					h : 35,
					sizes : array(97),
				),
				$client->photoPathSize(
					type : '3ibLmvlO9xU14Aed',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : '5jezW142SUIZQ76P',
					w : 83,
					h : 39,
					size : 84,
					video_start_ts : 280558.5029296875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 5872756730614180341,
					background_colors : array(79),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -7598831219617506673,
					background_colors : array(57),
				),
			),
			dc_id : 80,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8737549917914000487,
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
			id : -8490837071392775407,
			access_hash : 6770029252796124480,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1BQIOowUul9nxNSJ',
					reason : '2MiNswpHmXJxdCy9',
					text : 'QwxfEyJWPLdFZRNC',
				),
			),
			bot_inline_placeholder : 'xaZuHJoFWM7LnGDd',
			lang_code : 'NHpR3AmaSg2DjGy7',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 27,
			color : $client->peerColor(
				color : 91,
				background_emoji_id : 9139854805695178706,
			),
			profile_color : $client->peerColor(
				color : 3,
				background_emoji_id : 7803976623084536311,
			),
			bot_active_users : 50,
			bot_verification_icon : -3092399556975947122,
			send_paid_messages_stars : 1368494848739369978,
		),
	),
);
```