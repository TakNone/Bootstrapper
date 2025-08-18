# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 211

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
			views_count : 1,
			forwards_count : 45,
			reactions : array(
				$client->reactionCount(
					chosen_order : 61,
					reaction : $client->reactionEmpty(...),
					count : 73,
				),
			),
			reactions_count : 52,
			recent_viewers : array(-8115272688419556967),
		),
	),
	users : array(
		$client->userEmpty(
			id : -4054228791562958218,
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
			id : -2039765500424983314,
			access_hash : -5109255842672352277,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3R2vhipuGYFQnN4t',
					reason : 'zIeFjP9yN5uYnVwt',
					text : 'F7OaTAvV9wJjtm5L',
				),
			),
			bot_inline_placeholder : '17eqpb0FHxUic3rO',
			lang_code : '2mlrTxJjdckKLesq',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 88,
			color : $client->peerColor(
				color : 50,
				background_emoji_id : 5080951870647256265,
			),
			profile_color : $client->peerColor(
				color : 19,
				background_emoji_id : 6994308015135574222,
			),
			bot_active_users : 64,
			bot_verification_icon : -4333351683597150615,
			send_paid_messages_stars : 3805007232983135603,
		),
	),
);
```