# photos.photosSlice

**Description** : *Incomplete list of photos with auxiliary data*

**Layer** : 233

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
	count : 89,
	photos : array(
		$client->photoEmpty(
			id : -4539402246263826325,
		),
		$client->photo(
			has_stickers : true,
			id : 7482304405983932520,
			access_hash : 7847678184846826704,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 19,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'iwqUsHyPm5NnJ3Rr',
				),
				$client->photoSize(
					type : 'KEUgyhu1Lsc7FDVQ',
					w : 19,
					h : 41,
					size : 49,
				),
				$client->photoCachedSize(
					type : '0mBbkeZ67J1Aoifr',
					w : 21,
					h : 62,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'UwB1f5OXZDq0yISm',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'PJBz104OoiRbDahS',
					w : 14,
					h : 17,
					sizes : array(85),
				),
				$client->photoPathSize(
					type : '6WKmTUZ2PcLhdkMA',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : '01PNgBKuztmZdIV5',
					w : 58,
					h : 70,
					size : 66,
					video_start_ts : 1416125.615234375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2412752015278353117,
					background_colors : array(79),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 1887062711394574468,
					background_colors : array(5),
				),
			),
			dc_id : 35,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2106380867559646584,
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
			bot_forum_sidebar : true,
			id : -5065509856151220180,
			access_hash : -4386531807032634382,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 26,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2E0SvfBQ5xWukK6c',
					reason : 'BWZxkT8YtnHONiF9',
					text : 'i8YLaRcboMZpwQBg',
				),
			),
			bot_inline_placeholder : 'eZzyvpbK0M9ADhkf',
			lang_code : '0JyPfd6LcoRSiM3w',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 95,
			),
			color : $client->peerColor(
				color : 28,
				background_emoji_id : -6035654154529485887,
			),
			profile_color : $client->peerColor(
				color : 20,
				background_emoji_id : -5469702235453139445,
			),
			bot_active_users : 7,
			bot_verification_icon : 1896011362509797587,
			send_paid_messages_stars : -4056570708854988044,
			linked_community_id : -4822112433153949753,
		),
	),
);
```