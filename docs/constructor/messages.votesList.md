# messages.votesList

**Description** : *How users voted in a poll*

**Layer** : 211

```tl
messages.votesList#4899484e flags:# count:int votes:Vector<MessagePeerVote> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = messages.VotesList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of votes for all options (or only for the chosen option, if provided to messages.getPollVotes) |
| <mark>votes</mark> | [`Vector<MessagePeerVote>`](type/MessagePeerVote) | Vote info for each user |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about users that voted in the poll |
| **next_offset** | [`flags.0?string`](type/string) | Offset to use with the next messages.getPollVotes request, empty string if no more results are available |

---

## Type

[messages.VotesList](type/messages.VotesList)

---

## Example

```php
$messagesVotesList = $client->messages->votesList(
	count : 42,
	votes : array(
		$client->messagePeerVote(
			peer : $client->peerUser(
				user_id : -3512389534219144943,
			),
			option : 'L?1SLiveProto(g?ذ',
			date : 69,
		),
		$client->messagePeerVoteInputOption(
			peer : $client->peerUser(
				user_id : 8177944033809612566,
			),
			date : 38,
		),
		$client->messagePeerVoteMultiple(
			peer : $client->peerUser(
				user_id : 3089366804203100985,
			),
			options : array('?8??CLiveProto???Z'),
			date : 26,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6999942148626914963,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6874710491284315982,
			title : 'CSUvDMrARHO8pYe2',
			photo : $client->chatPhotoEmpty(),
			participants_count : 78,
			date : 100,
			version : 51,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 32,
			),
		),
		$client->chatForbidden(
			id : 2847269276858917635,
			title : 'ZKWCgMUp0urN21k3',
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
			id : -2123516379639406450,
			access_hash : -7818488658647805100,
			title : 'VstEWcu914z5rBqf',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TJdHws6tWpP35hIS',
					reason : '0o9qajOb8CVINxuE',
					text : 'pAJia67zxFMmDBIH',
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
				until_date : 32,
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
				until_date : 72,
			),
			participants_count : 5,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 91,
			color : $client->peerColor(
				color : 95,
				background_emoji_id : 8075634699539883399,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : 5774261452553218955,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 39,
			subscription_until_date : 22,
			bot_verification_icon : -375222607205983709,
			send_paid_messages_stars : 4371985977587373247,
			linked_monoforum_id : -8282054998741568127,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2272343503204159053,
			access_hash : -9043879759524412050,
			title : 'C2cXQoVDRISFHAnr',
			until_date : 15,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7109645627729570656,
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
			id : 2229103368911404542,
			access_hash : -8024624322435866493,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 9,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ECSOhQzLKTfnl0cu',
					reason : 'DCP0yViT15R8dUSx',
					text : 'gx6HoJUry8WPp25z',
				),
			),
			bot_inline_placeholder : 'ydmvJZoAjPYu1CRL',
			lang_code : 'wcjdDb1PfBykgl8q',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 23,
			color : $client->peerColor(
				color : 29,
				background_emoji_id : -1685468878208575336,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : -5884894557941154421,
			),
			bot_active_users : 56,
			bot_verification_icon : 425290904573528772,
			send_paid_messages_stars : -5550903806609881443,
		),
	),
	next_offset : 'er7bFIcJ3N5p1tL2',
);
```