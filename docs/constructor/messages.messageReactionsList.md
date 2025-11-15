# messages.messageReactionsList

**Description** : *List of peers that reacted to a specific message*

**Layer** : 218

```tl
messages.messageReactionsList#31bd492d flags:# count:int reactions:Vector<MessagePeerReaction> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = messages.MessageReactionsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of reactions matching query |
| <mark>reactions</mark> | [`Vector<MessagePeerReaction>`](type/MessagePeerReaction) | List of peers that reacted to a specific message |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| **next_offset** | [`flags.0?string`](type/string) | If set, indicates the next offset to use to load more results by invoking messages.getMessageReactionsList |

---

## Type

[messages.MessageReactionsList](type/messages.MessageReactionsList)

---

## Example

```php
$messagesMessageReactionsList = $client->messages->messageReactionsList(
	count : 41,
	reactions : array(
		$client->messagePeerReaction(
			big : true,
			unread : true,
			my : true,
			peer_id : $client->peerUser(
				user_id : -1418125231079840839,
			),
			date : 96,
			reaction : $client->reactionEmpty(),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 1318665372152324205,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6341656506881835721,
			title : '5kGhw8Y9KD6Uyr0L',
			photo : $client->chatPhotoEmpty(),
			participants_count : 20,
			date : 82,
			version : 81,
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
				until_date : 30,
			),
		),
		$client->chatForbidden(
			id : 1920646370785149096,
			title : '6kvIDroPNguJSL8q',
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
			id : 7722158688399985870,
			access_hash : -2060179141485787531,
			title : '7B41tSx6rfYblQVc',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'B9bhYp2tF60wPL7x',
					reason : 'Mch4fBgm7YiOCSt0',
					text : 's1zG2DYumqheN7jE',
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
				until_date : 67,
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
				until_date : 87,
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
				max_id : 39,
			),
			color : $client->peerColor(
				color : 8,
				background_emoji_id : 6992613529713895172,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : 7424904612780743999,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 30,
			subscription_until_date : 77,
			bot_verification_icon : -5635096859811431085,
			send_paid_messages_stars : -358304004342835290,
			linked_monoforum_id : 9187363206744083564,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 536529406284685069,
			access_hash : 7181892712584715166,
			title : 'OwADSdrjeyhYTkER',
			until_date : 39,
		),
	),
	users : array(
		$client->userEmpty(
			id : 838639261576700904,
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
			id : -8523949137594280669,
			access_hash : -6335213502966019240,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Ai7tmaESWXfjhMFp',
					reason : 'cJ4GlkEyXqpg9Zjo',
					text : 'W9pVxvPoQtsbg3SC',
				),
			),
			bot_inline_placeholder : 'ei2BbtpjuQU7SHOW',
			lang_code : 'bW0kTh3Y8iZsvcXP',
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
				max_id : 97,
			),
			color : $client->peerColor(
				color : 16,
				background_emoji_id : 2783258416085467692,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : 1028754746937130153,
			),
			bot_active_users : 31,
			bot_verification_icon : -5154448349839120856,
			send_paid_messages_stars : 2091515401320904059,
		),
	),
	next_offset : 'FmazZyjl1C4fIRED',
);
```