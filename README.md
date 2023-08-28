# Controlling

@todo Algorithms to use or implement (some are implemented in the phpOMS library)

## Anomaly detection

**Z-Score (Standard Score)** This method calculates the z-score for each data point and identifies points that are far from the mean by a certain threshold.

**IQR (Interquartile Range) Method** This method uses the interquartile range to define a range within which data points are considered normal. Points outside this range are considered anomalies.

**K-Means Clustering** Anomalies can be detected by measuring the distance of data points from the cluster centers. Points that are far from any cluster may be considered anomalies.

**Isolation Forest** This algorithm creates an ensemble of decision trees to isolate anomalies by identifying instances that require fewer splits to separate from the rest of the data.

**Local Outlier Factor (LOF)** LOF measures the local density deviation of a data point with respect to its neighbors. Anomalies are those data points with significantly lower density than their neighbors.

**One-Class SVM (Support Vector Machine)** This method constructs a hyperplane that separates the majority of data points from the rest. Points on the other side of the hyperplane are considered anomalies.

**Autoencoders** Autoencoders are neural networks used for unsupervised learning of efficient codings. Anomalies can be detected by measuring the reconstruction error of data points.

**DBSCAN (Density-Based Spatial Clustering of Applications with Noise)** DBSCAN groups together data points that are close to each other while labeling points in low-density regions as anomalies.

**HBOS (Histogram-Based Outlier Score)** HBOS creates histograms of the features and calculates anomaly scores based on the rarity of feature combinations.

**PCA (Principal Component Analysis)** By projecting data onto lower-dimensional subspaces, anomalies can be detected as data points that deviate significantly from the subspace.

**Mahalanobis Distance** This method measures the distance between a data point and a distribution by considering the covariance between features.

**Proximity-Based Models** These include methods like nearest neighbor approaches, which label data points as anomalies if they are distant from their k-nearest neighbors.

## Recommendation algorithms

**Collaborative Filtering** Recommends items to a user based on the preferences of similar users. Recommends items based on their similarity to items the user has interacted with.

**Content-Based Filtering** Analyzes the attributes and characteristics of items to recommend items that are similar to those a user has shown interest in.

**Matrix Factorization** Factorizes the user-item interaction matrix into lower-dimensional matrices to capture latent factors that explain user preferences and item characteristics.

**Neighborhood Models** Uses k-nearest neighbors to find similar users or items and recommends items that have been favored by those similar entities.

**Hybrid Recommender Systems** Combines multiple recommendation techniques, such as collaborative filtering and content-based filtering, to provide more accurate and diverse recommendations.

**Context-Aware Recommender Systems** Takes into account contextual information, such as location, time, and user context, to provide personalized recommendations based on the current situation.

**Factorization Machines** An extension of matrix factorization that can capture interactions between multiple attributes, enabling better recommendations in situations with rich item and user data.

**Deep Learning-based Recommenders** Utilizes neural networks to learn complex patterns from user-item interactions and content, allowing for more accurate and sophisticated recommendations.

**Association Rule Mining** Identifies frequent co-occurrence patterns in transactions and recommends items based on associations between them.

**Sequential Recommendation Models** Takes into account the temporal order of user interactions to make recommendations, suitable for scenarios like recommending movies, books, or products.

**Bandit Algorithms** Balances exploration and exploitation to recommend items that maximize long-term rewards while learning from user interactions.

**Meta-Learning Recommenders** Uses knowledge from previous recommendation tasks to adapt and provide personalized recommendations more effectively for new users.

**Bayesian Personalized Ranking (BPR)** Optimizes the ranking of positive and negative interactions to improve the accuracy of item ranking in recommendation lists.

**Session-Based Recommenders** Focuses on recommending items based on a user's current session behavior, suitable for scenarios with short-term user interactions.

**Factorization Bandits** Combines bandit algorithms with matrix factorization techniques to recommend items that balance exploration and exploitation.

## Optimization algorithms

**Gradient Descent** A widely used first-order optimization algorithm that iteratively updates the parameters of a model in the direction of steepest decrease of the loss function.

**Stochastic Gradient Descent (SGD)** A variant of gradient descent that computes the gradient and updates the parameters using a randomly selected subset of training data at each iteration.

**Mini-batch Gradient Descent** A compromise between batch gradient descent and stochastic gradient descent, where the gradient is computed and parameters are updated using a small batch of training data.

**Adam (Adaptive Moment Estimation)** An optimization algorithm that adapts the learning rate for each parameter based on the estimates of first and second moments of the gradients.

**RMSProp (Root Mean Square Propagation)** An adaptive learning rate optimization algorithm that divides the learning rate by a moving average of squared gradients.

**Adagrad (Adaptive Gradient Algorithm)** An optimization algorithm that adapts the learning rate for each parameter based on the historical gradient information.

**Nesterov Accelerated Gradient (NAG)** An optimization algorithm that uses a momentum term to accelerate convergence by taking into account the gradient's past direction.

**AdaDelta** An extension of Adagrad that aims to mitigate the diminishing learning rates by using a moving average of squared gradients.

**L-BFGS (Limited-memory Broyden–Fletcher–Goldfarb–Shanno)** A quasi-Newton optimization algorithm that approximates the inverse Hessian matrix to efficiently minimize smooth, unconstrained functions.

**Conjugate Gradient** An iterative optimization algorithm used for solving unconstrained optimization problems, particularly in the context of quadratic functions.

**Proximal Gradient Descent** An optimization algorithm used for solving problems with both smooth and non-smooth components, often encountered in regularization and sparsity-inducing techniques.

**Genetic Algorithms** A metaheuristic optimization algorithm inspired by the process of natural selection, where solutions evolve over generations through selection, crossover, and mutation.

**Particle Swarm Optimization (PSO)** An optimization algorithm inspired by the social behavior of birds and fish, where candidate solutions (particles) move through the search space to find optimal solutions.

**Simulated Annealing** An optimization algorithm inspired by the annealing process in metallurgy, which involves gradually cooling a material to reach a low-energy state; used to explore diverse regions of the search space.

**Differential Evolution** A population-based optimization algorithm that creates new solutions by combining components of existing solutions and selecting the better ones based on fitness evaluation.

**Ant Colony Optimization (ACO)** An optimization algorithm inspired by the foraging behavior of ants, where artificial ants build solutions and leave pheromone trails to guide other ants towards better solutions.

## Customer segmentation

**K-Means Clustering** Divides customers into a predefined number of clusters based on their similarities in terms of attributes or behaviors.

**Hierarchical Clustering** Builds a tree of clusters by repeatedly merging or splitting existing clusters based on similarity.

**DBSCAN (Density-Based Spatial Clustering of Applications with Noise)** Identifies dense regions of data points to form clusters, while handling noise and outliers.

**Gaussian Mixture Models (GMM)** Assumes that data points are generated from a mixture of several Gaussian distributions and assigns them to clusters based on probability distribution fitting.

**Self-Organizing Maps (SOM)** Utilizes a neural network to create a low-dimensional representation of data while preserving topological relationships, useful for visualizing high-dimensional data.

**RFM Analysis** Segments customers based on three factors - Recency (how recently a customer made a purchase), Frequency (how often they make purchases), and Monetary value (how much they spend).

**Market Basket Analysis** Identifies relationships between products that are frequently purchased together, often used in retail for cross-selling and recommendation.

**Latent Class Analysis (LCA)** Used to identify latent classes or groups within a population based on patterns of categorical variables.

**Factor Analysis** Reduces a large number of variables into a smaller set of factors, which can then be used for segmentation based on underlying patterns.

**Decision Trees** Utilizes a tree-like structure to segment customers based on a series of decisions or criteria.

**Neural Networks** Deep learning algorithms can be used for customer segmentation by learning complex patterns in customer behaviors.

**Fuzzy Clustering** Allows data points to belong to multiple clusters with varying degrees of membership, providing a more nuanced view of customer segmentation.

**Spectral Clustering** Utilizes the graph theory to cluster data points based on their similarity in a transformed space.

**Principal Component Analysis (PCA)** Reduces the dimensionality of data while preserving its variance, often used as a preprocessing step before applying other segmentation methods.

**Collaborative Filtering** Commonly used in recommendation systems, it segments customers based on their preferences and behaviors compared to other customers.

## Scheduling

**First-Come, First-Served (FCFS)** Processes are executed in the order they arrive in the queue.

**Shortest Job Next (SJN) / Shortest Job First (SJF)** The process with the shortest burst time is selected for execution next.

**Priority Scheduling** Each process is assigned a priority, and the process with the highest priority is executed next.

**Round Robin (RR)** Each process is assigned a fixed time slice or quantum, and they are executed in a circular order, with each process getting a turn in a round-robin fashion.

**Multilevel Queue Scheduling** Processes are divided into different priority levels, and each queue has its own scheduling algorithm. Higher-priority queues are served before lower-priority ones.

**Multilevel Feedback Queue Scheduling** Similar to multilevel queue scheduling, but processes can move between queues based on their behavior and resource requirements.

**Highest Response Ratio Next (HRRN)** This algorithm selects the process with the highest response ratio (ratio of waiting time to execution time) for execution.

**Least Slack Time (LST)** This algorithm prioritizes processes based on the amount of time they can be delayed without affecting other processes' deadlines.

**Earliest Deadline First (EDF)** Processes are scheduled based on their absolute deadlines. The process with the nearest deadline is executed next.

**Rate Monotonic Scheduling (RMS)** Processes with shorter periods (higher priority) are scheduled before those with longer periods (lower priority).

**Deadline Monotonic Scheduling (DMS)** Similar to RMS, but priorities are assigned based on deadlines instead of periods.

**Fair Share Scheduling** A resource allocation strategy that ensures each user or group gets a fair share of resources over time.

**Guaranteed Scheduling** Guarantees a minimum amount of CPU time to each process in the system.

**Weighted Fair Queuing (WFQ)** Assigns weights to different processes to allocate CPU time fairly in proportion to their weights.

**Lottery Scheduling** Processes are assigned lottery tickets, and the scheduler selects a ticket at random. The more tickets a process has, the higher its chance of being selected.