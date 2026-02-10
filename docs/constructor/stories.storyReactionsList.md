# stories.storyReactionsList

**Description** : *List of peers that reacted to or intercated with a specific story*

**Layer** : 222

```tl
stories.storyReactionsList#aa5f789c flags:# count:int reactions:Vector<StoryReaction> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = stories.StoryReactionsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 17,
	reactions : array(
		$client->storyReaction(
			peer_id : $client->peerUser(
				user_id : -6860243169874950396,
			),
			date : 12,
			reaction : $client->reactionEmpty(),
		),
		$client->storyReactionPublicForward(
			message : $client->messageEmpty(
				id : 45,
				peer_id : $client->peerUser(
					user_id : 3428443765142202020,
				),
			),
		),
		$client->storyReactionPublicRepost(
			peer_id : $client->peerUser(
				user_id : 1633431143036579257,
			),
			story : $client->storyItemDeleted(
				id : 20,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -770015397706080156,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3436128666145805752,
			title : 'ljLqpczNCtbROVxY',
			photo : $client->chatPhotoEmpty(),
			participants_count : 71,
			date : 14,
			version : 51,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 8,
			),
		),
		$client->chatForbidden(
			id : 211380234630719391,
			title : 'VJ5zOa7qxY0N4Aog',
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
			id : -8243830274048017844,
			access_hash : -6554929198407326713,
			title : 'X45ncePJ3CzOaRtx',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yI1JvbdnAxzPBaT3',
					reason : 'rfXkjVt6W82QGa3n',
					text : 'UemHlPia74bfw5Jy',
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
				until_date : 92,
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
				until_date : 83,
			),
			participants_count : 29,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 13,
			),
			color : $client->peerColor(
				color : 56,
				background_emoji_id : 5698084968185150860,
			),
			profile_color : $client->peerColor(
				color : 56,
				background_emoji_id : -1933267736992013211,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 30,
			subscription_until_date : 44,
			bot_verification_icon : -7980162362830670154,
			send_paid_messages_stars : 8499292168717367190,
			linked_monoforum_id : -7841563551017498262,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 6981659430404338834,
			access_hash : 6954162081153961808,
			title : 'd6jWeCH4kbozKvpi',
			until_date : 68,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8481785048453193626,
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
			id : -3208002018763519597,
			access_hash : 6052131208646452084,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 43,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EYLzjkuX9HJKaqGx',
					reason : 'gX65veYCu9nsEqRN',
					text : 'QiEI5MZxRB8qXyDg',
				),
			),
			bot_inline_placeholder : 'faWqi4Ed3P8k5DmA',
			lang_code : 'p4HgDN5aoJieQPKy',
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
				max_id : 56,
			),
			color : $client->peerColor(
				color : 5,
				background_emoji_id : 8538040278806500981,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : 4467469046504013590,
			),
			bot_active_users : 78,
			bot_verification_icon : 5888366155103153206,
			send_paid_messages_stars : 5684002161715956754,
		),
	),
	next_offset : 'xLANbtSBkVF82604',
);
```