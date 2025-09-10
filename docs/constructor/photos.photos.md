# photos.photos

**Description** : *Full list of photos with auxiliary data*

**Layer** : 214

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
			id : 616573940250240028,
		),
		$client->photo(
			has_stickers : true,
			id : -4567313059364316527,
			access_hash : 4018066250303988372,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 66,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'YNy5xs2UnalpTCcG',
				),
				$client->photoSize(
					type : 'ypoZqIQSm4uzn19A',
					w : 65,
					h : 76,
					size : 85,
				),
				$client->photoCachedSize(
					type : 'WG2v4ugZ1KTfy5Qi',
					w : 65,
					h : 88,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'rxLu1jfS4A9PTqb0',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'O7LudtrVIvRzXbgh',
					w : 26,
					h : 25,
					sizes : array(98),
				),
				$client->photoPathSize(
					type : 'vAg796eHJ4ubtscd',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'zw3Jgky1rDFX5BQp',
					w : 42,
					h : 57,
					size : 46,
					video_start_ts : -1660905.16796875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2754741087347821660,
					background_colors : array(45),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 2754996388230078766,
					background_colors : array(86),
				),
			),
			dc_id : 11,
		),
	),
	users : array(
		$client->userEmpty(
			id : -293514809369975673,
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
			id : 5946838044749390957,
			access_hash : -1243168115125531902,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 87,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gEd7coyI8POjDXZA',
					reason : 'bHsUFnOSJypPzB2f',
					text : 'XGLsq8pyIlxrWMf6',
				),
			),
			bot_inline_placeholder : 'zoRes4J67XHyEgCt',
			lang_code : '9zHw1FROgpArvjaN',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 10,
			color : $client->peerColor(
				color : 4,
				background_emoji_id : -2554199255799606910,
			),
			profile_color : $client->peerColor(
				color : 19,
				background_emoji_id : -6653159347716196041,
			),
			bot_active_users : 51,
			bot_verification_icon : 7003651827597991765,
			send_paid_messages_stars : -7548252936795833418,
		),
	),
);
```