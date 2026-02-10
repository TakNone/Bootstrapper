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
	count : 85,
	photos : array(
		$client->photoEmpty(
			id : -8034575330825307790,
		),
		$client->photo(
			has_stickers : true,
			id : 1235034483886568610,
			access_hash : 6080972653747239736,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 13,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'pBvk3tdAnfzhSxVP',
				),
				$client->photoSize(
					type : 'FgOx63fe9WX08c5S',
					w : 7,
					h : 62,
					size : 35,
				),
				$client->photoCachedSize(
					type : 'v2DeTYfSwjs4kCG7',
					w : 18,
					h : 34,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'nNToLsDvpBQfZaHW',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '7McLhI0STGR13BNl',
					w : 99,
					h : 3,
					sizes : array(46),
				),
				$client->photoPathSize(
					type : '7T5C4G3bOPXQ2lsy',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'nhJtP5MI32mHCTi0',
					w : 47,
					h : 77,
					size : 19,
					video_start_ts : -1730987.849609375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -4112938600806400389,
					background_colors : array(91),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6102823317312572370,
					background_colors : array(51),
				),
			),
			dc_id : 87,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5088913198784672137,
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
			id : -73272772279101580,
			access_hash : 4633049028428531452,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 5,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '43iJOPmxdqXoR9fu',
					reason : 'f4moxEsbYN5V0hir',
					text : 'bNaQydlk63SB18iJ',
				),
			),
			bot_inline_placeholder : 'e3l702rzObf1kwsn',
			lang_code : 'Wwb7fZyQ9RGUeHJd',
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
				max_id : 23,
			),
			color : $client->peerColor(
				color : 42,
				background_emoji_id : -1262490827560054665,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : 269506651218881131,
			),
			bot_active_users : 28,
			bot_verification_icon : -6884299754848986305,
			send_paid_messages_stars : 2065324381363065389,
		),
	),
);
```