# photos.photos

**Description** : *Full list of photos with auxiliary data*

**Layer** : 229

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
			id : 307706935460270312,
		),
		$client->photo(
			has_stickers : true,
			id : 5279137698988527883,
			access_hash : 7833137852948887508,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 52,
			sizes : array(
				$client->photoSizeEmpty(
					type : '3DZjnl7ImVqfRXKi',
				),
				$client->photoSize(
					type : 'UW8veMXsDA1Q4ui0',
					w : 7,
					h : 46,
					size : 4,
				),
				$client->photoCachedSize(
					type : 'vQB4Gbeln8tXUMg7',
					w : 73,
					h : 94,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'l1zMdwxYL2sJv3NK',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'xWDbijaeJumG3H4p',
					w : 57,
					h : 96,
					sizes : array(7),
				),
				$client->photoPathSize(
					type : 'Hb8rLtapPkzhGyTU',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'A5NcSHPWxgJQdICp',
					w : 78,
					h : 33,
					size : 13,
					video_start_ts : -1019820.8896484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2437612789496409757,
					background_colors : array(95),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -5459045138202901115,
					background_colors : array(43),
				),
			),
			dc_id : 15,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6323960891620226997,
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
			id : -1294184153145371806,
			access_hash : -4542128886353966589,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'eypSFJk8xohlABvH',
					reason : 'JDBEe0KaMRTlzy5q',
					text : 'YXTnfwLi3DcVh0Wg',
				),
			),
			bot_inline_placeholder : 'qE3s7jnuOP1w9o2a',
			lang_code : 'jWih93nUEBTLwd7o',
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
				max_id : 63,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : 4886803523740176122,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : 8963096216568541150,
			),
			bot_active_users : 10,
			bot_verification_icon : 9152917880918562771,
			send_paid_messages_stars : 3825173326828414226,
			linked_community_id : 2764064059057294288,
		),
	),
);
```