# messages.votesList

**Description** : *How users voted in a poll*

**Layer** : 227

```tl
messages.votesList#4899484e flags:# count:int votes:Vector<MessagePeerVote> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = messages.VotesList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 30,
	votes : array(
		$client->messagePeerVote(
			peer : $client->peerUser(
				user_id : 2927532653306406910,
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 19,
		),
		$client->messagePeerVoteInputOption(
			peer : $client->peerUser(
				user_id : 5678146671336297265,
			),
			date : 100,
		),
		$client->messagePeerVoteMultiple(
			peer : $client->peerUser(
				user_id : 4354105694869568521,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			date : 80,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6228278423610181203,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3853335567484401040,
			title : 'WAP08siC7aZgMLIb',
			photo : $client->chatPhotoEmpty(),
			participants_count : 11,
			date : 38,
			version : 69,
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
				until_date : 51,
			),
		),
		$client->chatForbidden(
			id : 8058675873391164525,
			title : '3S7l0NeOTptBWAvb',
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
			id : 6277153940183101048,
			access_hash : 873392208209594291,
			title : 'qFu2St4mJxCT8EKs',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 94,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PZl29wc4R8EHiJhM',
					reason : 'oU9zYwuht0xZPs5K',
					text : 'JRS9NbpGDeVqMYFQ',
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
				until_date : 38,
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
				until_date : 25,
			),
			participants_count : 61,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 21,
			),
			color : $client->peerColor(
				color : 78,
				background_emoji_id : -7011277230104359057,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : -3258693069609966683,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 46,
			subscription_until_date : 2,
			bot_verification_icon : -3248941508909079791,
			send_paid_messages_stars : 7041219790907109935,
			linked_monoforum_id : 6212316773199439681,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 7457545522775497173,
			access_hash : 2655603473146227754,
			title : 'N0nm5JrOdKoQ7SsI',
			until_date : 25,
		),
	),
	users : array(
		$client->userEmpty(
			id : 602844160031708026,
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
			id : 6904670131887104215,
			access_hash : -207787927810324166,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '08BGJRhU6gZLcvaq',
					reason : 'LGS7elTxQfbtuYDZ',
					text : 'f23quUx1kgTF946S',
				),
			),
			bot_inline_placeholder : 'sJNIHQL9nCBFh6al',
			lang_code : 'd8AQcISCLNEvpb0D',
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
				max_id : 72,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : 6840092830763286919,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : -2722037417216341794,
			),
			bot_active_users : 53,
			bot_verification_icon : -1573252736562293792,
			send_paid_messages_stars : 6581556641494950777,
		),
	),
	next_offset : 'ztWSAKu6YP04msNL',
);
```