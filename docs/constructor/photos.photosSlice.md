# photos.photosSlice

**Description** : *Incomplete list of photos with auxiliary data*

**Layer** : 218

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
	count : 70,
	photos : array(
		$client->photoEmpty(
			id : 456735514745221068,
		),
		$client->photo(
			has_stickers : true,
			id : 1757723331022282419,
			access_hash : -2825385721273139642,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 18,
			sizes : array(
				$client->photoSizeEmpty(
					type : '7PtM8BgDLY4lQKVd',
				),
				$client->photoSize(
					type : 'XW9AQqBoYrzdMmCf',
					w : 0,
					h : 37,
					size : 64,
				),
				$client->photoCachedSize(
					type : 'ACIgi2hHcYDylj75',
					w : 32,
					h : 90,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'PUiB5YcmjT6to1Wh',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'n9MEvTZKcfkQFrB1',
					w : 2,
					h : 42,
					sizes : array(2),
				),
				$client->photoPathSize(
					type : 'EuZQPtI3rNjzXolG',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : '5L0t4fOrBHJWhMm9',
					w : 9,
					h : 14,
					size : 61,
					video_start_ts : 677994.7119140625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7440417702595001411,
					background_colors : array(17),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -3395603203271582884,
					background_colors : array(22),
				),
			),
			dc_id : 7,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8931787297024282250,
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
			id : 7729048194610591309,
			access_hash : -3268104018095932459,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tsxWFR69M2eYXlNB',
					reason : 'd0fvKk2mRenYLApO',
					text : 'ApLZGaRwO3hxQlfV',
				),
			),
			bot_inline_placeholder : '3IioHezTpl7VAUED',
			lang_code : '7rZP4O0Sx35UL1BT',
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
				max_id : 70,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : 1635056552156042470,
			),
			profile_color : $client->peerColor(
				color : 78,
				background_emoji_id : -8209645365172734722,
			),
			bot_active_users : 60,
			bot_verification_icon : -8337734941213543791,
			send_paid_messages_stars : -3006753064021351574,
		),
	),
);
```