# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 227

```tl
stories.storyViews#de9eed1d views:Vector<StoryViews> users:Vector<User> = stories.StoryViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>views</mark> | [`Vector<StoryViews>`](type/StoryViews) | View date and reaction information of multiple stories |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.StoryViews](type/stories.StoryViews)

---

## Example

```php
$storiesStoryViews = $client->stories->storyViews(
	views : array(
		$client->storyViews(
			has_viewers : true,
			views_count : 42,
			forwards_count : 12,
			reactions : array(
				$client->reactionCount(
					chosen_order : 57,
					reaction : $client->reactionEmpty(),
					count : 40,
				),
			),
			reactions_count : 81,
			recent_viewers : array(7182249672294243119),
		),
	),
	users : array(
		$client->userEmpty(
			id : -7194277056802336703,
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
			id : 8397062428152630193,
			access_hash : 8732437356780812726,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xaCQekGB0qzyh64E',
					reason : 'X6Juj5IhmzWtVgCE',
					text : 'jM8C4mk1FDYptidy',
				),
			),
			bot_inline_placeholder : 'fvIhDbLPYSyam5GN',
			lang_code : '9RES3JkgqPDy1YlO',
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
				max_id : 76,
			),
			color : $client->peerColor(
				color : 63,
				background_emoji_id : 651940238884950500,
			),
			profile_color : $client->peerColor(
				color : 85,
				background_emoji_id : 3354936165408682094,
			),
			bot_active_users : 65,
			bot_verification_icon : -880365312191703816,
			send_paid_messages_stars : 5402933482460120200,
		),
	),
);
```