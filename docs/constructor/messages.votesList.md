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
	count : 19,
	votes : array(
		$client->messagePeerVote(
			peer : $client->peerUser(
				user_id : -8986737669899946002,
			),
			option : '???LiveProto?GH?',
			date : 32,
		),
		$client->messagePeerVoteInputOption(
			peer : $client->peerUser(
				user_id : -4932459537958084197,
			),
			date : 30,
		),
		$client->messagePeerVoteMultiple(
			peer : $client->peerUser(
				user_id : -6344556778828520153,
			),
			options : array('6q?]LiveProtoO?͍'),
			date : 98,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4330797806954872696,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3244559848536972564,
			title : 'mSjoVeC2PqvM08Zz',
			photo : $client->chatPhotoEmpty(),
			participants_count : 16,
			date : 25,
			version : 18,
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
				until_date : 38,
			),
		),
		$client->chatForbidden(
			id : -2883062725574127971,
			title : 'QOn2ulIjRbdZ90zv',
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
			id : -8547718382374582566,
			access_hash : 5440156907265488191,
			title : 'owRZuQ9lV8NzbD3G',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 9,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZbqX79Ktgc2BVeQA',
					reason : 'iRsTnWmD34O2qwBe',
					text : 'P3JxrQeL6tMXo14T',
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
				until_date : 18,
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
				until_date : 98,
			),
			participants_count : 2,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 52,
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -8254386544530536751,
			),
			profile_color : $client->peerColor(
				color : 21,
				background_emoji_id : 1980974471795308874,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 66,
			subscription_until_date : 71,
			bot_verification_icon : 5876968651135521320,
			send_paid_messages_stars : 7138549552761143572,
			linked_monoforum_id : -4653201821857613126,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5648653287427793532,
			access_hash : -512419348614841312,
			title : 'Vszb9N1QJnEkeRMo',
			until_date : 45,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8258809517637934312,
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
			id : 747877474382974240,
			access_hash : -1121901053227332627,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 89,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tcQ9oT2EumAxXSpd',
					reason : 'UlnkDdPfoNRMIxr1',
					text : 'm3s2HYDzJNFTtbf0',
				),
			),
			bot_inline_placeholder : 'TLbmkMy1RdsYO2ce',
			lang_code : 'pmhxTKYSNzfZ8qB5',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 70,
			color : $client->peerColor(
				color : 38,
				background_emoji_id : -3533943235436299732,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : -7069225635516939401,
			),
			bot_active_users : 86,
			bot_verification_icon : -6441707013532036592,
			send_paid_messages_stars : 1939715324150476526,
		),
	),
	next_offset : 'BR1ShCjlqb2iosXz',
);
```