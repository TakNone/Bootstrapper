# photos.photosSlice

**Description** : *Incomplete list of photos with auxiliary data*

**Layer** : 229

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
	count : 51,
	photos : array(
		$client->photoEmpty(
			id : -7544044316960317202,
		),
		$client->photo(
			has_stickers : true,
			id : -3207702811708460490,
			access_hash : -5893043309158964125,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 67,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'mgT2wik7UbX1Y0hl',
				),
				$client->photoSize(
					type : 'ZLKmvC9EXejGDc7w',
					w : 55,
					h : 45,
					size : 21,
				),
				$client->photoCachedSize(
					type : 'NHsFeokRq4T8bxin',
					w : 44,
					h : 4,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'xmPz6AQB37bL9h5K',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'QLoktpMwWYTO6Fnx',
					w : 40,
					h : 56,
					sizes : array(16),
				),
				$client->photoPathSize(
					type : 'f2NIvjlUEgHdr3nQ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'V6L3fnKbwzvEJrAD',
					w : 41,
					h : 58,
					size : 88,
					video_start_ts : -1677476.5771484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4909225518431253203,
					background_colors : array(1),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -1317179267723036695,
					background_colors : array(94),
				),
			),
			dc_id : 26,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5921523637271735047,
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
			id : -1929034387349665219,
			access_hash : 3592837672607407260,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 55,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7J06OunWTgdZChkE',
					reason : 'Ina14wD9hupmC7Kk',
					text : 'a0jA82KM1geNzhBV',
				),
			),
			bot_inline_placeholder : 'rcYCoGQFLmb98XEy',
			lang_code : '49QrEUD1GWHp7lYu',
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
				max_id : 42,
			),
			color : $client->peerColor(
				color : 80,
				background_emoji_id : -7571783910843984772,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : 5523050096886837252,
			),
			bot_active_users : 61,
			bot_verification_icon : 7640883212269912575,
			send_paid_messages_stars : -8875253129530364214,
			linked_community_id : -2616025322655967971,
		),
	),
);
```