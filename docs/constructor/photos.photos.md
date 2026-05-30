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
			id : 6203246516571013729,
		),
		$client->photo(
			has_stickers : true,
			id : 4517145851900473145,
			access_hash : -5682455408262132371,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 97,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'XSKtNPuZ746CaDJs',
				),
				$client->photoSize(
					type : 'bC13BmaY65iuSlLq',
					w : 94,
					h : 27,
					size : 30,
				),
				$client->photoCachedSize(
					type : 'lPugN5YDe1bpd87q',
					w : 5,
					h : 69,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'LFlg5XGEfdavp4nk',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'K9XgxYN8lBG5uTS3',
					w : 71,
					h : 71,
					sizes : array(70),
				),
				$client->photoPathSize(
					type : 'uZjSlvD5XwVsMot3',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'Jp9O6xqiUkbWBSsM',
					w : 78,
					h : 43,
					size : 86,
					video_start_ts : -1890651.42578125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1543207934394924794,
					background_colors : array(79),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -5481234380284239239,
					background_colors : array(88),
				),
			),
			dc_id : 26,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8252049653034047152,
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
			id : -4445639015175727574,
			access_hash : -1840183823226557043,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nRQ5NmYwO6avlUKb',
					reason : 'XOcLC4elEWHBqpvI',
					text : 's9jUkW32H4OfDbld',
				),
			),
			bot_inline_placeholder : 'LmRXFEZqAc3YIihQ',
			lang_code : 'w9uJdBcMNTSpUasW',
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
				max_id : 78,
			),
			color : $client->peerColor(
				color : 77,
				background_emoji_id : 1647604041672913979,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : -5445273463954565039,
			),
			bot_active_users : 3,
			bot_verification_icon : -4184076120421904050,
			send_paid_messages_stars : 5018135608715558955,
		),
	),
);
```