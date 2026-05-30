# photos.photosSlice

**Description** : *Incomplete list of photos with auxiliary data*

**Layer** : 222

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
	count : 46,
	photos : array(
		$client->photoEmpty(
			id : -2154529877480705252,
		),
		$client->photo(
			has_stickers : true,
			id : -1499659616402517037,
			access_hash : -5835138916814479807,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 56,
			sizes : array(
				$client->photoSizeEmpty(
					type : '8tHgMpoCBPweEaRF',
				),
				$client->photoSize(
					type : 'bjYcpIgWVoPnZNQe',
					w : 90,
					h : 6,
					size : 86,
				),
				$client->photoCachedSize(
					type : 'pFDViM7TPSl2bCOs',
					w : 73,
					h : 22,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'LfQaFcBH6UgtuzrX',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '0bQBangU4HkYRCm3',
					w : 18,
					h : 30,
					sizes : array(34),
				),
				$client->photoPathSize(
					type : '3MzkgVNJR80dID5m',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'j1sZiqcL5rPWADve',
					w : 1,
					h : 100,
					size : 27,
					video_start_ts : 779499.259765625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3181299354361667994,
					background_colors : array(53),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 2838626710361332718,
					background_colors : array(91),
				),
			),
			dc_id : 55,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4483605255896572277,
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
			id : 4307840780231829513,
			access_hash : 1617997377470008488,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 74,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qcmQEBMyAXhV8xCd',
					reason : 'txJPUz7yuMvhDwIn',
					text : 'QacgNXq2FvDmWEkB',
				),
			),
			bot_inline_placeholder : 'CHXep7mfzDbqitLw',
			lang_code : 'VWvhlisdzORbrCc4',
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
				max_id : 21,
			),
			color : $client->peerColor(
				color : 45,
				background_emoji_id : -5999882039161709067,
			),
			profile_color : $client->peerColor(
				color : 25,
				background_emoji_id : -7775691391096162158,
			),
			bot_active_users : 18,
			bot_verification_icon : -5290419852904386299,
			send_paid_messages_stars : 8977334955341028351,
		),
	),
);
```