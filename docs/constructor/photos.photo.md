# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 227

```tl
photos.photo#20212ca8 photo:Photo users:Vector<User> = photos.Photo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>photo</mark> | [`Photo`](type/Photo) | Photo |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[photos.Photo](type/photos.Photo)

---

## Example

```php
$photosPhoto = $client->photos->photo(
	photo : $client->photoEmpty(
		id : 7860974935450552322,
	),
	users : array(
		$client->userEmpty(
			id : 9024259279527083729,
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
			id : 2880614572505085677,
			access_hash : 2124265971266545047,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qRwBYt4XADyv0EZM',
					reason : 'McDLsqXE36QWfNyR',
					text : 'TCA1Geu3xyrOhHvF',
				),
			),
			bot_inline_placeholder : 'qcBp8H4xyRDdCS9A',
			lang_code : 'CmI2fWcMgVxyYz4U',
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
				max_id : 30,
			),
			color : $client->peerColor(
				color : 47,
				background_emoji_id : 1174277049876486562,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : -9009041872828360804,
			),
			bot_active_users : 86,
			bot_verification_icon : 4404343122748015997,
			send_paid_messages_stars : 4671018105918256622,
		),
	),
);
```