# photos.photos

**Description** : *Full list of photos with auxiliary data*

**Layer** : 233

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
			id : 3190060305663208010,
		),
		$client->photo(
			has_stickers : true,
			id : 8770965478314040286,
			access_hash : 6898944665038239376,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 45,
			sizes : array(
				$client->photoSizeEmpty(
					type : '4JXLsjnMO6YxVHK8',
				),
				$client->photoSize(
					type : '7MczQEnKUxPfLsHN',
					w : 27,
					h : 70,
					size : 94,
				),
				$client->photoCachedSize(
					type : 'fFP0YVC6OQLxwXAq',
					w : 84,
					h : 72,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Ae0t2P7EMvVSGz4H',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'IWMAEY9sXK1T53jB',
					w : 15,
					h : 51,
					sizes : array(41),
				),
				$client->photoPathSize(
					type : '0SG6UcaR7Dro19iC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'EhsZeKXDGSMjlT4r',
					w : 15,
					h : 1,
					size : 51,
					video_start_ts : -48099.64453125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -687614255489624353,
					background_colors : array(31),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -7328882715338743269,
					background_colors : array(35),
				),
			),
			dc_id : 91,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6842264277249705906,
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
			bot_forum_sidebar : true,
			id : -1676652343538791089,
			access_hash : -686732086013320921,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Ol50YF94bxsCo3pc',
					reason : 'q8tj9rCLoV273acb',
					text : 'E3jG7hZwHCrLQskY',
				),
			),
			bot_inline_placeholder : 'o6GCris1OhQAKmLx',
			lang_code : 'WJI8YkM4lB5SzfHE',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 25,
			),
			color : $client->peerColor(
				color : 3,
				background_emoji_id : 8683864172719644363,
			),
			profile_color : $client->peerColor(
				color : 99,
				background_emoji_id : -2550095609884066596,
			),
			bot_active_users : 60,
			bot_verification_icon : 7537084861343700285,
			send_paid_messages_stars : -6616355065656802542,
			linked_community_id : 2096761348356017551,
		),
	),
);
```