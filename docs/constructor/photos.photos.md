# photos.photos

**Description** : *Full list of photos with auxiliary data*

**Layer** : 222

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
			id : -9186694871322611543,
		),
		$client->photo(
			has_stickers : true,
			id : -7018232589332058207,
			access_hash : -4481625609067239049,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 89,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'JO6iB08Vxul7ITwf',
				),
				$client->photoSize(
					type : 'eGY27psdwyJoHAj4',
					w : 94,
					h : 37,
					size : 72,
				),
				$client->photoCachedSize(
					type : 'bnoTVr4CvPAa83yk',
					w : 98,
					h : 53,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'zm6YxyGQpBM9JcaC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'jbvJMpZH5wY4IX7c',
					w : 9,
					h : 17,
					sizes : array(18),
				),
				$client->photoPathSize(
					type : 'ZTtwyVlEu1d25rOa',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : '9XKDCelajR8NAbSs',
					w : 13,
					h : 53,
					size : 71,
					video_start_ts : -953786.6728515625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1234264469826625156,
					background_colors : array(67),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 3316377181729002378,
					background_colors : array(69),
				),
			),
			dc_id : 46,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5265831220713079556,
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
			id : 1283995653892497179,
			access_hash : 1483968277105734812,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '29Jap0KCHe6RWBsh',
					reason : 'zFKWudV5D913rJTI',
					text : '5GvNezJ7DRHTg6qW',
				),
			),
			bot_inline_placeholder : 'hLfFqSI3Pp8YA7jv',
			lang_code : 'wUuVeZmcRK7Qpzib',
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
				max_id : 89,
			),
			color : $client->peerColor(
				color : 22,
				background_emoji_id : 8176484503105599785,
			),
			profile_color : $client->peerColor(
				color : 37,
				background_emoji_id : 7855223349769172387,
			),
			bot_active_users : 59,
			bot_verification_icon : -8950253819681412328,
			send_paid_messages_stars : -2137935852216050153,
		),
	),
);
```