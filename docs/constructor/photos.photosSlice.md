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
	count : 93,
	photos : array(
		$client->photoEmpty(
			id : 18002794368745061,
		),
		$client->photo(
			has_stickers : true,
			id : -4662779368172491838,
			access_hash : 4973945055865840072,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 95,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'M9ZBNRrl50s6OuqD',
				),
				$client->photoSize(
					type : 'ZiOwU8uEV0dBD7Lp',
					w : 83,
					h : 8,
					size : 92,
				),
				$client->photoCachedSize(
					type : 'BMw5ZEL0XKIHlriP',
					w : 67,
					h : 13,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'VlhZSYbpKg4P7zJo',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'P9p5m0BaGt1JXUcT',
					w : 27,
					h : 53,
					sizes : array(43),
				),
				$client->photoPathSize(
					type : 'Y0fitc8wupGvshld',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'VnsgDObW8kx63jeX',
					w : 38,
					h : 90,
					size : 74,
					video_start_ts : 1173848.04296875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 782821414070190378,
					background_colors : array(39),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 5485702983148023992,
					background_colors : array(62),
				),
			),
			dc_id : 13,
		),
	),
	users : array(
		$client->userEmpty(
			id : 981758223920555463,
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
			id : -9079636569495470947,
			access_hash : 65952707625744309,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'erHjCksDzbcUplgf',
					reason : 'xqCPrj3aDYKt692T',
					text : '81vzlEUpHRew7mtJ',
				),
			),
			bot_inline_placeholder : 'UgnbHVZGCpOaomNq',
			lang_code : 'J7sYVztIdGFWcu5A',
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
				max_id : 79,
			),
			color : $client->peerColor(
				color : 100,
				background_emoji_id : 243673855755071692,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 5387952250714027068,
			),
			bot_active_users : 15,
			bot_verification_icon : 7933011111733268981,
			send_paid_messages_stars : -8519785964779633496,
		),
	),
);
```