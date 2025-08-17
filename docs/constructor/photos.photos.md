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
			id : 8992803913100281390,
		),
		$client->photo(
			has_stickers : true,
			id : -1169540685999287027,
			access_hash : -943605674713902501,
			file_reference : '???hLiveProto?D"??',
			date : 50,
			sizes : array(
				$client->photoSizeEmpty(
					type : '6mzKtPvfNlMHGBUu',
				),
				$client->photoSize(
					type : 'X2pihBtq0YHMksKP',
					w : 7,
					h : 65,
					size : 38,
				),
				$client->photoCachedSize(
					type : 'ML3NYkv1ydiwQVSr',
					w : 41,
					h : 66,
					bytes : '???LiveProto?O???',
				),
				$client->photoStrippedSize(
					type : 'HdFTM51Q9gLOmAPt',
					bytes : '?\\??LiveProto??b',
				),
				$client->photoSizeProgressive(
					type : 'qjXTAi4EdMwRCoYV',
					w : 8,
					h : 86,
					sizes : array(87),
				),
				$client->photoPathSize(
					type : '7HGmOo2EcQ8hyRxF',
					bytes : 'B??LiveProto?|?e?',
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'riOelUuz3b4vW2Vn',
					w : 90,
					h : 35,
					size : 21,
					video_start_ts : 545605.5634765625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3829582364758079523,
					background_colors : array(40),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -6681841925435031897,
					background_colors : array(88),
				),
			),
			dc_id : 66,
		),
	),
	users : array(
		$client->userEmpty(
			id : 615058905917225772,
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
			id : -7088400776529441831,
			access_hash : -8314701342766625149,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 29,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Pu4c2LslEVIHBnX5',
					reason : 'lB9UqPLbX6a2Kko1',
					text : 'Ab4PUgSfYdmCaNyq',
				),
			),
			bot_inline_placeholder : 'sCpWr75P1QL4BTg9',
			lang_code : '3bNmDiztQFhsRB6v',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 68,
			color : $client->peerColor(
				color : 77,
				background_emoji_id : -7650796386847090235,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : 7692990613442466157,
			),
			bot_active_users : 10,
			bot_verification_icon : -4890572000431537456,
			send_paid_messages_stars : 4793804626532847409,
		),
	),
);
```