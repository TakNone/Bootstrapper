# messages.messageReactionsList

**Description** : *List of peers that reacted to a specific message*

**Layer** : 227

```tl
messages.messageReactionsList#31bd492d flags:# count:int reactions:Vector<MessagePeerReaction> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = messages.MessageReactionsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 63,
	reactions : array(
		$client->messagePeerReaction(
			big : true,
			unread : true,
			my : true,
			peer_id : $client->peerUser(
				user_id : -8735663127958444291,
			),
			date : 6,
			reaction : $client->reactionEmpty(),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7600570179480714337,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3167354232805052310,
			title : 'qLED1zwFbG4OTWV8',
			photo : $client->chatPhotoEmpty(),
			participants_count : 12,
			date : 93,
			version : 13,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 63,
			),
		),
		$client->chatForbidden(
			id : 2020818608267115489,
			title : 'LQgGOhrCpBIPzHfw',
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
			id : -4132247972852577033,
			access_hash : -5950751617305970145,
			title : 'NBaX1tiHhCYkIRGe',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0VYcbER1AFvrHXxw',
					reason : 'xbWlf8Y52MLAjPGd',
					text : 'teMnGNbJrPTgHl5k',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 64,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 87,
			),
			participants_count : 66,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 49,
			),
			color : $client->peerColor(
				color : 20,
				background_emoji_id : 6718274562957439744,
			),
			profile_color : $client->peerColor(
				color : 8,
				background_emoji_id : 7914106528624060970,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 70,
			subscription_until_date : 2,
			bot_verification_icon : -659690742206519201,
			send_paid_messages_stars : -6614918859222112710,
			linked_monoforum_id : -7008148794157336135,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -7106957030398270377,
			access_hash : -7218711134251132605,
			title : 'l0hv3I2VGMPWci8x',
			until_date : 78,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8557226228918129618,
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
			id : 4157196099887401548,
			access_hash : 3110879032745369385,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MgRUeKTnEVkhwz6y',
					reason : 'cvwld6mnBFtugx8D',
					text : 'Ke6iP7npuo9I3x1H',
				),
			),
			bot_inline_placeholder : 'W4sFMk9RbTndceOg',
			lang_code : 'GmhLtJ12aDovwiCj',
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
				max_id : 10,
			),
			color : $client->peerColor(
				color : 82,
				background_emoji_id : 2693679179304592530,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : -1005054590953181174,
			),
			bot_active_users : 70,
			bot_verification_icon : 4453185261654205552,
			send_paid_messages_stars : 6873789319830584940,
		),
	),
	next_offset : 'nUeVKCRGrzp7b6TS',
);
```