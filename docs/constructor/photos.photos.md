# photos.photos

**Description** : *Full list of photos with auxiliary data*

**Layer** : 214

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
			id : 6392790821295780268,
		),
		$client->photo(
			has_stickers : true,
			id : 7670037824251737743,
			access_hash : -7566921757050683823,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 58,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'E8t36uSvBy9leDop',
				),
				$client->photoSize(
					type : '9i52pbCncIxlP36o',
					w : 39,
					h : 24,
					size : 20,
				),
				$client->photoCachedSize(
					type : 'gvbNn6mGTciCrwWI',
					w : 53,
					h : 81,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Zb5CM32oJ71x4sEe',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'eTHktSuygvV7bLh5',
					w : 81,
					h : 73,
					sizes : array(57),
				),
				$client->photoPathSize(
					type : '1QdkXp9RcZsgirWu',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : '04qeZ5dNUEwz1IP6',
					w : 22,
					h : 41,
					size : 17,
					video_start_ts : -1901907.21484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8323229644446949490,
					background_colors : array(54),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -5996991966350412583,
					background_colors : array(87),
				),
			),
			dc_id : 69,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2115002980323868308,
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
			id : -5905611963715008911,
			access_hash : 6289496991935834315,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wCPIxKHE9dqoMtcv',
					reason : 'k8rMmVBIPaf4Roti',
					text : 'VpfDNxHvzhyCEijG',
				),
			),
			bot_inline_placeholder : 'HB5u6wiGOhzKDqae',
			lang_code : 'hCGPIQNySJVWK4gc',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 75,
			color : $client->peerColor(
				color : 65,
				background_emoji_id : -172998687189973239,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : -7300010919153553727,
			),
			bot_active_users : 90,
			bot_verification_icon : 1950543763643931527,
			send_paid_messages_stars : 6878187962839761710,
		),
	),
);
```