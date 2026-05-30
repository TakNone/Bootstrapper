# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 225

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
		id : -429146655767853587,
	),
	users : array(
		$client->userEmpty(
			id : -2581747079393319650,
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
			id : -8428596985731675528,
			access_hash : -1892082319357147982,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2C1gv90brIcsDwSK',
					reason : 'PsM8vcJpEr4nBWLN',
					text : '4zgnoX6WutGDfZ2e',
				),
			),
			bot_inline_placeholder : 'UusQn7PR9jDkpc4w',
			lang_code : 'ogBvt7ks4FZMbumK',
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
				max_id : 93,
			),
			color : $client->peerColor(
				color : 95,
				background_emoji_id : 6716613397791476203,
			),
			profile_color : $client->peerColor(
				color : 70,
				background_emoji_id : -545136105602754052,
			),
			bot_active_users : 98,
			bot_verification_icon : -3536902849649777232,
			send_paid_messages_stars : -8174488321428082743,
		),
	),
);
```