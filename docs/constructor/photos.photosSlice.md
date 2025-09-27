# photos.photosSlice

**Description** : *Incomplete list of photos with auxiliary data*

**Layer** : 214

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
	count : 80,
	photos : array(
		$client->photoEmpty(
			id : 8308865675356490356,
		),
		$client->photo(
			has_stickers : true,
			id : 3884005186580416900,
			access_hash : 5272430107199810750,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 100,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'iRu8IdhVom9ja640',
				),
				$client->photoSize(
					type : '7rgsGWMwE8dbRnNj',
					w : 77,
					h : 76,
					size : 18,
				),
				$client->photoCachedSize(
					type : 'CwKzxId5B40oZYAV',
					w : 63,
					h : 11,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'rXsE1iNP4IdymKfJ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'K1reudiVy38a5NsC',
					w : 20,
					h : 98,
					sizes : array(78),
				),
				$client->photoPathSize(
					type : 'm0vaOKWgp8B5N4sc',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'MvgxXoNak2FJmzyY',
					w : 54,
					h : 50,
					size : 74,
					video_start_ts : 1468628.8544921875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2326614274012886184,
					background_colors : array(25),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 1326455811973472463,
					background_colors : array(95),
				),
			),
			dc_id : 83,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6397095032041308422,
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
			id : 9079451195009741057,
			access_hash : -6349561566892934978,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 97,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QYX3v6B19h7qdRlK',
					reason : 'jD8JIFhX6rcxEyAd',
					text : 'W9eYvk3Fu6m7TAJE',
				),
			),
			bot_inline_placeholder : '09rAVx5RobcnMsU7',
			lang_code : 'Wi3BluC4Np7RtUcG',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 43,
			color : $client->peerColor(
				color : 44,
				background_emoji_id : -6267186262923764393,
			),
			profile_color : $client->peerColor(
				color : 21,
				background_emoji_id : -8104743097879341795,
			),
			bot_active_users : 45,
			bot_verification_icon : -2942338280970340804,
			send_paid_messages_stars : -8749889211148473344,
		),
	),
);
```