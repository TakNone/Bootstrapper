# messages.votesList

**Description** : *How users voted in a poll*

**Layer** : 222

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
	count : 51,
	votes : array(
		$client->messagePeerVote(
			peer : $client->peerUser(
				user_id : -2804016540832288086,
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 87,
		),
		$client->messagePeerVoteInputOption(
			peer : $client->peerUser(
				user_id : 4309805449997238110,
			),
			date : 81,
		),
		$client->messagePeerVoteMultiple(
			peer : $client->peerUser(
				user_id : 2303557347511966061,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			date : 5,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6967831633571120475,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1730447341058674782,
			title : 'jfxIp2G1cP9qAmD6',
			photo : $client->chatPhotoEmpty(),
			participants_count : 80,
			date : 46,
			version : 20,
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
				until_date : 57,
			),
		),
		$client->chatForbidden(
			id : 6227606729864873544,
			title : 'ld0WSJxsKeTnkqVj',
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
			id : 561099178821764589,
			access_hash : 5268729660189699212,
			title : 'mbq5OiKoyEcW7VDj',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0AdWhyxPKCJZpHvc',
					reason : 'QvDLIWMSEp3A1dUh',
					text : 'wZluicKIQ5b8Rt3V',
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
				until_date : 39,
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
				until_date : 94,
			),
			participants_count : 73,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 100,
			),
			color : $client->peerColor(
				color : 20,
				background_emoji_id : 3863561446722423844,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : 5342636561672477752,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 3,
			subscription_until_date : 19,
			bot_verification_icon : -4270676490476969171,
			send_paid_messages_stars : 4277943676285369555,
			linked_monoforum_id : 2959959972206798272,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 3507083098562317533,
			access_hash : -2167559526920878979,
			title : 'JCmc3R9F02Ql7Pvh',
			until_date : 64,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6961292862154685295,
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
			id : -7116925274850629796,
			access_hash : 6696837684487597694,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jLfemFJZq36MT9Vb',
					reason : 'uWCfBrtE8OPZaoGb',
					text : 'cE7Ao82yWVgtmBha',
				),
			),
			bot_inline_placeholder : 'tQWApM90P6fOYGRc',
			lang_code : 'jOegWf7ua9roAcyZ',
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
				max_id : 19,
			),
			color : $client->peerColor(
				color : 97,
				background_emoji_id : 209465570858382796,
			),
			profile_color : $client->peerColor(
				color : 52,
				background_emoji_id : 6015123810356724671,
			),
			bot_active_users : 72,
			bot_verification_icon : -5261615826401156491,
			send_paid_messages_stars : 4548063578299573209,
		),
	),
	next_offset : 'NZdhkVmseKluTPG7',
);
```