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
	count : 52,
	photos : array(
		$client->photoEmpty(
			id : -5473020076709353690,
		),
		$client->photo(
			has_stickers : true,
			id : 1223397683588990615,
			access_hash : -727913602814830370,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 69,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'F7TCViyhpQvPsubk',
				),
				$client->photoSize(
					type : '7VHyu3mfPM69tXEn',
					w : 7,
					h : 74,
					size : 97,
				),
				$client->photoCachedSize(
					type : 'UReErfwmnLQHhujs',
					w : 95,
					h : 67,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'fEyi91ZeDWKsUL6I',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'SVfhwZxmRgWqa8Ir',
					w : 88,
					h : 74,
					sizes : array(42),
				),
				$client->photoPathSize(
					type : 'naDHtYfVyxFUmS5O',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'FPpX1DL8kxmEOSuW',
					w : 13,
					h : 91,
					size : 53,
					video_start_ts : -849132.140625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 9220372292677887737,
					background_colors : array(40),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -88947475187368820,
					background_colors : array(87),
				),
			),
			dc_id : 40,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8044140380389279632,
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
			id : 5167389911400648028,
			access_hash : -4292814062728074618,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6K8Z7zjT4nGawiS5',
					reason : 'iHrn9tI01ZzaBTSd',
					text : 'TokQKmOzLlR8nWPV',
				),
			),
			bot_inline_placeholder : 'EuHcTLK0RdelfGh3',
			lang_code : 'qnWIs4oa5ZNGrMlE',
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
				max_id : 29,
			),
			color : $client->peerColor(
				color : 41,
				background_emoji_id : -2982997790622868782,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : 5922336077466205673,
			),
			bot_active_users : 61,
			bot_verification_icon : 7357783257807770022,
			send_paid_messages_stars : 6164331709136241614,
		),
	),
);
```