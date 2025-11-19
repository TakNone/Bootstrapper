# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 218

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
		id : -2865402095668374006,
	),
	users : array(
		$client->userEmpty(
			id : 7537704232160449754,
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
			id : 1644526268928045098,
			access_hash : -158954583416370595,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 72,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'scWX5rPt94O16LzN',
					reason : 'mFR3ous4wKqPTY8d',
					text : 'QOpLijJPUrqxdnWt',
				),
			),
			bot_inline_placeholder : 'qJOzUQj9F50g3KVn',
			lang_code : 'aPonjZ3QdxuUYkqt',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 35,
				background_emoji_id : 1566707040160442497,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : 6982995052620648646,
			),
			bot_active_users : 2,
			bot_verification_icon : -3923272599536388126,
			send_paid_messages_stars : 439095633656678565,
		),
	),
);
```