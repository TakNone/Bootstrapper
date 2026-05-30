# photos.photosSlice

**Description** : *Incomplete list of photos with auxiliary data*

**Layer** : 225

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
	count : 91,
	photos : array(
		$client->photoEmpty(
			id : 7765123136003355909,
		),
		$client->photo(
			has_stickers : true,
			id : -3635285290343089812,
			access_hash : -3507265832284404503,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 83,
			sizes : array(
				$client->photoSizeEmpty(
					type : '9YfvqH65lS8AFEN3',
				),
				$client->photoSize(
					type : 'e0m6ifXdCZWMVHNO',
					w : 34,
					h : 68,
					size : 81,
				),
				$client->photoCachedSize(
					type : 'ycD1ijUKxJHapf9Y',
					w : 10,
					h : 51,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'JDpCKhei0PgBF6lu',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '2NIUjZR1Wvbg5mLe',
					w : 86,
					h : 22,
					sizes : array(20),
				),
				$client->photoPathSize(
					type : 'v7iSU3tg4BEpVJbu',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : '825skiTNjc9MeBzb',
					w : 36,
					h : 40,
					size : 56,
					video_start_ts : -595998.4951171875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 673461450147434161,
					background_colors : array(97),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2021642326576066781,
					background_colors : array(9),
				),
			),
			dc_id : 17,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7817496966669862997,
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
			id : 791026511119571635,
			access_hash : -6928233243213447831,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Qin75FNaDcYr8BCg',
					reason : 'wI9GPuQxoHL7UBtD',
					text : 'BYuGfry7jtENwl0v',
				),
			),
			bot_inline_placeholder : 'GLH8eauMQBA3Nq02',
			lang_code : 'EwFz7U10J9MTodWm',
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
				max_id : 14,
			),
			color : $client->peerColor(
				color : 58,
				background_emoji_id : 1732978715827823169,
			),
			profile_color : $client->peerColor(
				color : 56,
				background_emoji_id : -2067329584715654312,
			),
			bot_active_users : 40,
			bot_verification_icon : -2932422276102457365,
			send_paid_messages_stars : -7851170274226838613,
		),
	),
);
```