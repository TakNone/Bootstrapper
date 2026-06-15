# photos.photos

**Description** : *Full list of photos with auxiliary data*

**Layer** : 227

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
			id : -3727113740429994719,
		),
		$client->photo(
			has_stickers : true,
			id : -4907094076856283449,
			access_hash : -6941349218749483633,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 66,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'ZMSLe8CcumQ43BDx',
				),
				$client->photoSize(
					type : 'UCzLhtiRugFwj2Zq',
					w : 50,
					h : 40,
					size : 53,
				),
				$client->photoCachedSize(
					type : '7EDMTpY4eZiBnrzu',
					w : 37,
					h : 60,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '0fOWP56D7JT4opmF',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '36oz54vjcLew7fmn',
					w : 30,
					h : 75,
					sizes : array(100),
				),
				$client->photoPathSize(
					type : '9JGZVt2grpjFM0vc',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'Q1a8jukPTOCoNdSp',
					w : 40,
					h : 19,
					size : 15,
					video_start_ts : -963918.625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3565829674249334286,
					background_colors : array(44),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6908962455404128648,
					background_colors : array(48),
				),
			),
			dc_id : 66,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1158589530714981810,
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
			id : 1277555091146769101,
			access_hash : 4279640888625686722,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'g5B1uJ9WvSZpTEDw',
					reason : 'TL4atdYGcQ1NZo0r',
					text : '0cKInEP2dXUBGljN',
				),
			),
			bot_inline_placeholder : 'S04HVUqMdlm5fD7c',
			lang_code : 'c7jKZ3DM8sGeLSFP',
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
				max_id : 58,
			),
			color : $client->peerColor(
				color : 23,
				background_emoji_id : -5675570307345850806,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : 5065827121265651180,
			),
			bot_active_users : 25,
			bot_verification_icon : 4819674088200183333,
			send_paid_messages_stars : 4650442840703274854,
		),
	),
);
```