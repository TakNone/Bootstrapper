# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 233

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
			views_count : 59,
			forwards_count : 68,
			reactions : array(
				$client->reactionCount(
					chosen_order : 53,
					reaction : $client->reactionEmpty(),
					count : 48,
				),
			),
			reactions_count : 78,
			recent_viewers : array(-4364337632163777327),
		),
	),
	users : array(
		$client->userEmpty(
			id : 88107914133819834,
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
			id : 1366642848655315236,
			access_hash : 3348921476751220985,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 78,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'FhofYr71lesb3c64',
					reason : 'Cpy58RKOEQHbYdhq',
					text : 'wXRbdKZfNGIol20B',
				),
			),
			bot_inline_placeholder : 'Fl1rteRuysfboWI5',
			lang_code : 'TXLJghd8qf01PYon',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 27,
				background_emoji_id : -422776615983965006,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : 3771717083458044650,
			),
			bot_active_users : 33,
			bot_verification_icon : -1412156180597354564,
			send_paid_messages_stars : -7650274930774684673,
			linked_community_id : -6470626549138158615,
		),
	),
);
```