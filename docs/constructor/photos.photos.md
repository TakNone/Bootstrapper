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
			id : -5839188694592380778,
		),
		$client->photo(
			has_stickers : true,
			id : 3633500433080082325,
			access_hash : 2081399916987473530,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 29,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'oG796aTxrUsce4NZ',
				),
				$client->photoSize(
					type : 'jNm9kDoleh6SaE5b',
					w : 58,
					h : 6,
					size : 52,
				),
				$client->photoCachedSize(
					type : '2DV71Iqms9YJoeNz',
					w : 52,
					h : 45,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '029IAtmg1RekZuoq',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Dv3elWmdYQIKG5xn',
					w : 13,
					h : 23,
					sizes : array(19),
				),
				$client->photoPathSize(
					type : 'azdF19I3yvGOKPHU',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'ehb3sKqJcYnBC69D',
					w : 38,
					h : 38,
					size : 34,
					video_start_ts : 2092948.2724609375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6560734057606333689,
					background_colors : array(86),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -4526455421730872497,
					background_colors : array(77),
				),
			),
			dc_id : 61,
		),
	),
	users : array(
		$client->userEmpty(
			id : -9077726186890864711,
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
			id : 7434204289924191267,
			access_hash : 2050881812319636674,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qAas6c4Fh3gfXexI',
					reason : '9RpJlhtIWF1ejcBM',
					text : 'dQzXysYeNoHwkLI1',
				),
			),
			bot_inline_placeholder : '5jlhZzsN9L8kaxri',
			lang_code : 'h0Yq8XNJK4pyDvHe',
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
				max_id : 98,
			),
			color : $client->peerColor(
				color : 6,
				background_emoji_id : 6467667704123082299,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : -8949195666963861034,
			),
			bot_active_users : 57,
			bot_verification_icon : -4351892329408127271,
			send_paid_messages_stars : -7574284748050620584,
		),
	),
);
```