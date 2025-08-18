# photos.photos

**Description** : *Full list of photos with auxiliary data*

**Layer** : 211

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
			id : 3236268201481093490,
		),
		$client->photo(
			has_stickers : true,
			id : 2273599907924635599,
			access_hash : -2683593203369787161,
			file_reference : '????LiveProto????',
			date : 35,
			sizes : array(
				$client->photoSizeEmpty(
					type : '2vcU4VPYj8T5J0dW',
				),
				$client->photoSize(
					type : 'pWA02oQSDfBbXzaH',
					w : 99,
					h : 70,
					size : 99,
				),
				$client->photoCachedSize(
					type : 'a1uY3oiV58pdgDTL',
					w : 53,
					h : 11,
					bytes : '???LiveProtoM?7?8',
				),
				$client->photoStrippedSize(
					type : 'MvEedlsgcybSOo6Y',
					bytes : '#???/LiveProto??o??',
				),
				$client->photoSizeProgressive(
					type : 'BnFx9QG7Rv2ls30D',
					w : 12,
					h : 37,
					sizes : array(81),
				),
				$client->photoPathSize(
					type : 'C7tMphy3oKrVwzDc',
					bytes : '?2W?LiveProto?ڞ',
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'wWdrSC79Q34L8Jgk',
					w : 46,
					h : 27,
					size : 39,
					video_start_ts : -921088.806640625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3091774276506146261,
					background_colors : array(31),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 5765977163202527470,
					background_colors : array(1),
				),
			),
			dc_id : 68,
		),
	),
	users : array(
		$client->userEmpty(
			id : 291833545720552418,
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
			id : -3346689143185087903,
			access_hash : -1063702587655516834,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YD9Fn8GcgE0dO1KN',
					reason : 'zeQU6xqGHcN2390g',
					text : '2XlbD5WCK1utpknc',
				),
			),
			bot_inline_placeholder : 'd0Gm2jwCWfxeLzov',
			lang_code : 'GoyXMbEQPFwldTSK',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 25,
			color : $client->peerColor(
				color : 52,
				background_emoji_id : -3788577297118655595,
			),
			profile_color : $client->peerColor(
				color : 98,
				background_emoji_id : -8804114535704856961,
			),
			bot_active_users : 53,
			bot_verification_icon : 4285194275287485136,
			send_paid_messages_stars : -3163624524584391090,
		),
	),
);
```