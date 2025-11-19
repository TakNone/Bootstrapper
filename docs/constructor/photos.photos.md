# photos.photos

**Description** : *Full list of photos with auxiliary data*

**Layer** : 218

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
			id : -4368063044569426181,
		),
		$client->photo(
			has_stickers : true,
			id : -7938365568164109852,
			access_hash : -8899390437270712410,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 14,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'gH8JBrUtQLj3qux5',
				),
				$client->photoSize(
					type : 'G36tR4adS2rjZgBw',
					w : 90,
					h : 40,
					size : 3,
				),
				$client->photoCachedSize(
					type : 'cLlgfasHhb0IyB9J',
					w : 77,
					h : 34,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'GKSag4DPMkLU6jpA',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'YpoufUaihI9AC0x6',
					w : 9,
					h : 63,
					sizes : array(27),
				),
				$client->photoPathSize(
					type : 'WSlKOj35rGcJEuIY',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'vzdaZWFuH1eGxJ4c',
					w : 90,
					h : 93,
					size : 13,
					video_start_ts : 1799573.1552734375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5164523234213649520,
					background_colors : array(100),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -5189495594542678863,
					background_colors : array(2),
				),
			),
			dc_id : 70,
		),
	),
	users : array(
		$client->userEmpty(
			id : 327946708329291091,
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
			id : -6058848103177234121,
			access_hash : -5113820942818052425,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 69,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NDopsjGbTg8XtlCI',
					reason : 'SX4xiG1uHdT9hm8y',
					text : 'DT9J7idUOYzqckxW',
				),
			),
			bot_inline_placeholder : 'ptyDcMRO1VzX4Kuk',
			lang_code : 'vuZJ4oc2tpAkHEFs',
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
				max_id : 22,
			),
			color : $client->peerColor(
				color : 50,
				background_emoji_id : -3208886897210112900,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : -8865388251909551121,
			),
			bot_active_users : 90,
			bot_verification_icon : -6215499348191735955,
			send_paid_messages_stars : -3791820208620175974,
		),
	),
);
```