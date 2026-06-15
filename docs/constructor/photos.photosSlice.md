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
	count : 28,
	photos : array(
		$client->photoEmpty(
			id : -1439117741001063996,
		),
		$client->photo(
			has_stickers : true,
			id : -5099213878662988927,
			access_hash : 8966529985652726936,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 21,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'EFlr213bASjs6QMG',
				),
				$client->photoSize(
					type : 'kw3VHTDNBimcCX7L',
					w : 2,
					h : 46,
					size : 93,
				),
				$client->photoCachedSize(
					type : 'YPnDeIu9z7WogpQX',
					w : 37,
					h : 12,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'zkyNJtICKvqmGDsf',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'NP0vJ6lU9cwnMBap',
					w : 78,
					h : 62,
					sizes : array(16),
				),
				$client->photoPathSize(
					type : 'fMmeZQ5qbAwGxLOF',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'CuinTSxj4GPODg2c',
					w : 36,
					h : 81,
					size : 8,
					video_start_ts : 1811135.7529296875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3484658841020887492,
					background_colors : array(21),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6891510164719638316,
					background_colors : array(31),
				),
			),
			dc_id : 33,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3541999605192920116,
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
			id : 6616545523503415029,
			access_hash : -4931257883001715941,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 96,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0bRyQlA46a5jdhB2',
					reason : 'T58yqAvjGwD3hPL2',
					text : '9RULvgq1cws3KFGO',
				),
			),
			bot_inline_placeholder : 'HbQ5aUY4DRLg3xTu',
			lang_code : 'ecJIOMWn8vVijfUm',
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
				max_id : 37,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : 391761198085529532,
			),
			profile_color : $client->peerColor(
				color : 70,
				background_emoji_id : 6679483276765662996,
			),
			bot_active_users : 2,
			bot_verification_icon : 4919278055622304311,
			send_paid_messages_stars : 3944257423999973184,
		),
	),
);
```