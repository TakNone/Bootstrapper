# stories.storyReactionsList

**Description** : *List of peers that reacted to or intercated with a specific story*

**Layer** : 218

```tl
stories.storyReactionsList#aa5f789c flags:# count:int reactions:Vector<StoryReaction> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = stories.StoryReactionsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of reactions matching query |
| <mark>reactions</mark> | [`Vector<StoryReaction>`](type/StoryReaction) | List of peers that reacted to or interacted with a specific story |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| **next_offset** | [`flags.0?string`](type/string) | If set, indicates the next offset to use to load more results by invoking stories.getStoryReactionsList |

---

## Type

[stories.StoryReactionsList](type/stories.StoryReactionsList)

---

## Example

```php
$storiesStoryReactionsList = $client->stories->storyReactionsList(
	count : 19,
	reactions : array(
		$client->storyReaction(
			peer_id : $client->peerUser(
				user_id : 3327534849840381140,
			),
			date : 2,
			reaction : $client->reactionEmpty(),
		),
		$client->storyReactionPublicForward(
			message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : 3699196389188817843,
				),
			),
		),
		$client->storyReactionPublicRepost(
			peer_id : $client->peerUser(
				user_id : 2123061110369989508,
			),
			story : $client->storyItemDeleted(
				id : 2,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -8232786664339526926,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4116403763142900870,
			title : 'DSapHuh9KGmgzbYU',
			photo : $client->chatPhotoEmpty(),
			participants_count : 36,
			date : 52,
			version : 26,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 86,
			),
		),
		$client->chatForbidden(
			id : 8344481236990741353,
			title : 'nqYmcE8TQJr0o1aI',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 4291133068288001371,
			access_hash : 5388528586621817925,
			title : 'TyIKaE9FzhCx2n3m',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qc38k6zWxuN5iZlH',
					reason : 'YsRLJ6pdnqcQ9xFH',
					text : 'wi29c6vxAZLzBSyl',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 59,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 78,
			),
			participants_count : 89,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 70,
			),
			color : $client->peerColor(
				color : 2,
				background_emoji_id : 2469208032242685726,
			),
			profile_color : $client->peerColor(
				color : 58,
				background_emoji_id : 8817280165225610205,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 85,
			subscription_until_date : 55,
			bot_verification_icon : -4551607766119299849,
			send_paid_messages_stars : -4172224095913492175,
			linked_monoforum_id : -6966499097309397806,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4592322346317365248,
			access_hash : -1593255151234156911,
			title : '2qIQXmDLz7Na9K30',
			until_date : 74,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1215384851006833199,
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
			id : -3476411791094310562,
			access_hash : 3008703189668560636,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 81,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YaS3uRdZWmoOpciq',
					reason : 'TdZuWOHVBMJcpqCy',
					text : 'VbZHlE1BXNpaTO20',
				),
			),
			bot_inline_placeholder : 'UlZVAJ0eKSoiE35z',
			lang_code : 'XlpmOZFKGyPUWsae',
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
				max_id : 16,
			),
			color : $client->peerColor(
				color : 8,
				background_emoji_id : -564695305627514590,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : -4722831921391404829,
			),
			bot_active_users : 40,
			bot_verification_icon : -7306915920934538632,
			send_paid_messages_stars : -425987046195912406,
		),
	),
	next_offset : '64Of2WQn93XLNIKG',
);
```