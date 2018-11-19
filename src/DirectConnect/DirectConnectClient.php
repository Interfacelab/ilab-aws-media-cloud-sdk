<?php
namespace ILAB_Aws\DirectConnect;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Direct Connect** service.
 *
 * @method \ILAB_Aws\Result allocateConnectionOnInterconnect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocateConnectionOnInterconnectAsync(array $args = [])
 * @method \ILAB_Aws\Result allocateHostedConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocateHostedConnectionAsync(array $args = [])
 * @method \ILAB_Aws\Result allocatePrivateVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocatePrivateVirtualInterfaceAsync(array $args = [])
 * @method \ILAB_Aws\Result allocatePublicVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocatePublicVirtualInterfaceAsync(array $args = [])
 * @method \ILAB_Aws\Result associateConnectionWithLag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateConnectionWithLagAsync(array $args = [])
 * @method \ILAB_Aws\Result associateHostedConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateHostedConnectionAsync(array $args = [])
 * @method \ILAB_Aws\Result associateVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateVirtualInterfaceAsync(array $args = [])
 * @method \ILAB_Aws\Result confirmConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise confirmConnectionAsync(array $args = [])
 * @method \ILAB_Aws\Result confirmPrivateVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise confirmPrivateVirtualInterfaceAsync(array $args = [])
 * @method \ILAB_Aws\Result confirmPublicVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise confirmPublicVirtualInterfaceAsync(array $args = [])
 * @method \ILAB_Aws\Result createBGPPeer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBGPPeerAsync(array $args = [])
 * @method \ILAB_Aws\Result createConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectionAsync(array $args = [])
 * @method \ILAB_Aws\Result createDirectConnectGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDirectConnectGatewayAsync(array $args = [])
 * @method \ILAB_Aws\Result createDirectConnectGatewayAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDirectConnectGatewayAssociationAsync(array $args = [])
 * @method \ILAB_Aws\Result createInterconnect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInterconnectAsync(array $args = [])
 * @method \ILAB_Aws\Result createLag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLagAsync(array $args = [])
 * @method \ILAB_Aws\Result createPrivateVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPrivateVirtualInterfaceAsync(array $args = [])
 * @method \ILAB_Aws\Result createPublicVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPublicVirtualInterfaceAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteBGPPeer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBGPPeerAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDirectConnectGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDirectConnectGatewayAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDirectConnectGatewayAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDirectConnectGatewayAssociationAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteInterconnect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInterconnectAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteLag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLagAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVirtualInterfaceAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConnectionLoa(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionLoaAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConnectionsOnInterconnect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionsOnInterconnectAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDirectConnectGatewayAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDirectConnectGatewayAssociationsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDirectConnectGatewayAttachments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDirectConnectGatewayAttachmentsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDirectConnectGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDirectConnectGatewaysAsync(array $args = [])
 * @method \ILAB_Aws\Result describeHostedConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHostedConnectionsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeInterconnectLoa(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInterconnectLoaAsync(array $args = [])
 * @method \ILAB_Aws\Result describeInterconnects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInterconnectsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeLags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLagsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeLoa(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoaAsync(array $args = [])
 * @method \ILAB_Aws\Result describeLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeVirtualGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVirtualGatewaysAsync(array $args = [])
 * @method \ILAB_Aws\Result describeVirtualInterfaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVirtualInterfacesAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateConnectionFromLag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConnectionFromLagAsync(array $args = [])
 * @method \ILAB_Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result updateLag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLagAsync(array $args = [])
 * @method \ILAB_Aws\Result updateVirtualInterfaceAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVirtualInterfaceAttributesAsync(array $args = [])
 */
class DirectConnectClient extends AwsClient {}
